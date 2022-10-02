#include <iostream>
#include <cstdio>
using namespace std;

int main(){
   string jurusanMhs,kategoriMhs;
   string notValidMsg ="Input Tidak Valid !";
   int inputJurusanMhs,inputKategoriMhs; 
   bool checkJurusanMhs = false;
   bool checkKategoriMhs = false;

   cout << "==Daftar Jurusan==\n"
   "1. Teknik Informatika\n2. Sistem Informasi\n3. Design Komunikasi Visual \n\n";

   cout << "==Kategori Mahasiswa==\n"
   "1. Semester 1-2 = Freshman\n2. Semester 3-4 = Sophomore\n"
   "3. Semester 5-6 = Junior\n4. Semester 7-8 = Senior\n\n";

   do{
      cout << "Masukan Jurusan Anda : ";
      cin >> inputJurusanMhs;

      if(inputJurusanMhs < 1 || inputJurusanMhs  > 3){
         cout << notValidMsg << endl;
         checkJurusanMhs = true;
      }else{
         checkJurusanMhs = false;
      }
   }while (checkJurusanMhs);

   do{
      cout << "Masukan Semester Anda : ";
      cin >> inputKategoriMhs;

      if(inputKategoriMhs < 1 || inputKategoriMhs  > 4){
         cout << notValidMsg  << endl;
         checkKategoriMhs = true;
      }else{
         checkKategoriMhs = false;
      }
   }while (checkKategoriMhs);

   switch (inputJurusanMhs){
      case 1:
         jurusanMhs="Teknik Informatika";
         break;
      case 2:
         jurusanMhs="Sistem Informasi";
         break;
      case 3:
         jurusanMhs="Design Komunikasi Visual";
         break;
         
      default:
         jurusanMhs= "<Tidak Teridentifikasi>";
         break;
   }

   switch (inputKategoriMhs){
      case 1:
         kategoriMhs="Freshman";
         break;
      case 2:
         kategoriMhs="Sophomore";
         break;
      case 3:
         kategoriMhs="Junior";
         break;
      case 4:
         kategoriMhs="Senior";
         break; 
      default:
         kategoriMhs= "<Tidak Teridentifikasi>";
         break             ;
   }
   

   cout << "Jurusan anda adalah " << jurusanMhs << "."<< endl;
   cout << "Anda dalam kategori " << kategoriMhs << " year." << endl;
   
   system("pause");
   return 0;
}