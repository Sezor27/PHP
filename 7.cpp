#include <iostream>
#include <cstdlib>
#include <cmath>

using namespace std;

int dodaj(int,int);
int potega(int,int);
int pr(int a, int b,int &pole,int &obwod,int &przekatna,int celsjusz,int &kelwin, int &fahrenheit)
{
    pole=a*b;
    obwod=2*(a+b);
    przekatna=sqrt(a*a + b*b);
    kelwin=celsjusz+273;
    fahrenheit=celsjusz*1.8 + 32;
}

int main()
{
    int a,b,suma,wynik,podstawa_potegowania,wykladnik_potegowania,pole,obwod,przekatna,celsjusz,kelwin,fahrenheit;
    system("chcp 1250");
    system("cls");
    cout<<"Podaj wartoœæ a"<<endl;
    cin>>a;
    cout<<"Podaj wartoœæ b"<<endl;
    cin>>b;
    cout<<"Podaj podstawê potêgowania"<<endl;
    cin>>podstawa_potegowania;
    cout<<"Podaj wyk³adnik potêgowania"<<endl;
    cin>>wykladnik_potegowania;
    cout<<"Podaj stopnie celsjusza"<<endl;
    cin>>celsjusz;
    suma=dodaj(a,b);
    pr(a,b,pole,obwod,przekatna,celsjusz,kelwin,fahrenheit);
    wynik=potega(podstawa_potegowania,wykladnik_potegowania);
    cout<<"wartoœæ sumy wynosi: "<<suma<<endl;
    cout<<"wynik potêgowania wynosi: "<<wynik<<endl;
    cout<<"pole prostokata ab wynosi: "<<pole<<endl;
    cout<<"obwod prostokata ab wynosi: "<<obwod<<endl;
    cout<<"przekatna prostokata ab wynosi: "<<przekatna<<endl;
    cout<<celsjusz<<" stopni celsjusza to "<<kelwin<<" stopnie kelwina"<<endl;
    cout<<celsjusz<<" stopni celsjusza to "<<fahrenheit<<" stopnie fahrenheita"<<endl;




}

int dodaj (int a, int b)
{
    int suma;
    suma=a+b;
    return suma;

}

int potega (int podstawa_potegowania, int wykladnik_potegowania)
{
    int wynik=1;

    for (int i = 0; i<wykladnik_potegowania; i++)
        wynik*=podstawa_potegowania;
    return wynik;
}
