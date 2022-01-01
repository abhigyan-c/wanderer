#include<iostream>
using namespace std;
int main()
{
    int n1,n2,n3;
    cout<<"Enter n1,n2,n3:"<<endl;
    cin>>n1>>n2>>n3;
    int m1[n1][n2],m2[n2][n3];
    cout<<"Enter first matrix elements:"<<endl;
    for (int i=0;i<n1;i++)
    {
        for (int j=0;j<n2;j++)
        {
            cin>>m1[i][j];
        }
        cout<<endl;
    }
    cout<<"Enter second matrix elements:"<<endl;
    for (int i=0;i<n2;i++)
    {
        for (int j=0;j<n3;j++)
        {
            cin>>m2[i][j];
        }
        cout<<endl;
    }
    int k=0;
    int arr[n1][n3];
    for (int i=0;i<n1;i++)
    {
        
        for (int j=0;j<n3;j++)
        {
            int k=0,f=0;
            while(k<n2)
            {
                f +=m1[i][k]*m2[k][j];
                k++;
            } 
            arr[i][j]=f;
        }

    }
    cout<<"The multiplied matrix is:"<<endl;
    for (int i=0;i<n1;i++)
    {
        for (int j=0;j<n3;j++)
        {
            cout<<arr[i][j]<<" ";
        }
        cout<<endl;
    }
    return 0;
}