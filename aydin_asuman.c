#include <stdio.h>

int main() {



    for(int i = 0; i < 10; i++)
    {
        printf("this loops is a simple example
 to the for loop iteration in c \n");
    }
    
    double asuman[3] = {123.5,124.6,1352.4};
    
    int count = 0;
    
    while( count  < sizeof(asuman)/sizeof(double))
    {
        printf("values of asuman array is: %f\n", asuman[count]);
        count++;
    }
    return 0;
}
