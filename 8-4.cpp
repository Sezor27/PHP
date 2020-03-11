#include <iostream>
#include <cstdlib>
#include <cmath>



    using namespace std;

    void kolo(float *pol,float *obw, float r){
        *pol = M_PI*r*r;
        *obw = 2*M_PI*r;


    }

    int main()
    {
        float pole;
        float obwod;
        float r;

        float *wsk_pol = &pole;
        float *wsk_obw = &obwod;
        float *wsk_r = &r;

            cout<<"Podaj promien"<<endl;
            cin>>r;
            kolo(wsk_pol,wsk_obw,r);
            cout<<"pole kola "<< pole << endl;
            cout<<"obwod kola " <<obwod<< endl;

            system("pause >nul");
            return 0;

    }
