#include <opencv2/imgcodecs.hpp>
#include <opencv2/highgui.hpp>
#include <opencv2/imgproc.hpp>
#include <iostream>
#include<fstream>
#include <time.h>

using namespace cv;
using namespace std;

vector<vector<Point2i>> arr = { {Point(0,495), Point(40,530)},
								{Point(80,490), Point(160,525)},
								{Point(200,490), Point(290,530)},
								{Point(320,490), Point(380,530)},
								{Point(450,490), Point(520,530)},
								{Point(570,480), Point(640,520)},
								{Point(675,475), Point(740,510)},
								{Point(780,455), Point(850,490)},
								{Point(881,450), Point(941,480)}, //8

								{Point(771,341), Point(822,358)}, //9
								{Point(712,354), Point(750,375)},
								{Point(641,350), Point(694,370)},
								{Point(585,360), Point(632,381)},
								{Point(515,368), Point(570,390)}, //13
								{Point(420,370), Point(470,390)},
								{Point(346,377), Point(400,397)},
								{Point(265,375), Point(330,401)},
								{Point(190,385), Point(250,410)},
								{Point(109,391), Point(168,412)},
								{Point(20,382), Point(77,410)},  //19

								{Point(0,330), Point(20,350)}, //20
								{Point(54,335), Point(95,355)},
								{Point(121,335), Point(164,355)},
								{Point(182,330), Point(234,350)},
								{Point(256,330), Point(298,350)},
								{Point(316,330), Point(364,350)}, //25
								{Point(390,330), Point(430,350)},
								{Point(454,322), Point(510,340)},
								{Point(519,316), Point(560,333)},
								{Point(572,317), Point(606,330)},
								{Point(632,304), Point(688,318)}, //30
								{Point(698,302), Point(742,322)} };


Mat imgGray, imgBlur, imgCanny, imgCrop;

int main(int argc, char *argv)
{
	string path = "car_park_cut.mp4";
	VideoCapture cap(path);
	Mat img;
	clock_t start, end;
	start = clock();
	while (true) {
		cap.read(img);
		if (img.empty())
		{
			VideoCapture cap2(path);
			cap = cap2;
			continue;
		}
		resize(img, img, Size(), 0.5, 0.5);
		cvtColor(img, imgGray, COLOR_BGR2GRAY);
		GaussianBlur(imgGray, imgBlur, Size(5, 5), 5, 0);
		int count = 0;
		for (int i = 0; i < arr.size(); i++)
		{
			vector<Point> curr = arr[i];
			Rect roi(curr[0].x, curr[0].y, curr[1].x - curr[0].x, curr[1].y - curr[0].y);
			imgCrop = imgBlur(roi).clone();
			Canny(imgCrop, imgCanny, 5, 55);
			//imshow("Canny " + to_string(i), imgCanny);
			vector<Mat> bgr_planes;
			split(imgCanny, bgr_planes);
			int histSize = 256;
			float range[] = { 0, 256 };
			const float* histRange = { range };
			bool uniform = true, accumulate = false;
			Mat b_hist, g_hist, r_hist;
			calcHist(&bgr_planes[0], 1, 0, Mat(), b_hist, 1, &histSize, &histRange, uniform, accumulate);
			//cout << b_hist.at<float>(255) << endl;
			rectangle(img, curr[0], curr[1], b_hist.at<float>(255) > 50 ? Scalar(0, 0, 255) : Scalar(0, 255, 0), 1);
			putText(img, to_string(i+1), Point(curr[0].x, curr[1].y-5), FONT_HERSHEY_DUPLEX, 0.5, 
				b_hist.at<float>(255) > 50 ? Scalar(0, 0, 255) : Scalar(0, 255, 0), 1);
			count += b_hist.at<float>(255) > 50 ? 1 : 0;
		}

		cout << count << ',' << arr.size() << endl;
		
		imshow("image", img);


		end = clock();
		double time_used = ((double)(end - start)) / CLOCKS_PER_SEC;
		if (time_used > 1.)
		{
			ofstream myFile;
			myFile.open("data.txt", std::ios_base::out);

			myFile << count << ',' << arr.size();
			cout << endl << endl;
			myFile.close();
			start = end;
		}

		waitKey(1);
	}
}
