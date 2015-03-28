#include <iostream>
#include <string>
#include <fstream>
#include <windows.h>

using namespace std;


int main(int argc, char* argv[]){
	//cout << "Luar Biasa" << endl;
	
	ofstream File("File.txt");
	cout << "Pake kutip ga tuh?" << endl;
	cout << argv[2] << endl;
	for (int i = 0; i < 50; i++){
		File<< argv[1] << ", ";
		Sleep(10);
	}
	File.close();

}