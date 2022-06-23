#include <stdio.h>
#include <stdlib.h>

		//new secure code function that i changed
void C_Application_Firewall(char* in_buf){
	for(char c = *in_buf++; c != '\x00' ; c = *in_buf++){
	if (c=='A') {
	printf("You have been blocked!\n");
	printf("Your IP has been reported to the authorities.\n");
	exit(-1);
}
}
}

void CAFtest() {
	char buf[256] = {0};
	printf("\nC Application Firerwall Test - Please try a payload:\n");
	gets(buf);
	C_Application_Firewall(buf);
	printf(buf);

}

int main(int argc, char* argv[]){
	while(1){
	CAFtest();
}
}

//========================================================

             // #include <string.h>
            // #define BUFFER_SIZE 64
            // #include <windows.h>
            // #include <stdlib.h>
            //#include <stdlib.h>
            // #include <iostream>
            // using namespace std;
            //#include <iostream.h>
            // import time
            // while True:
            //     print("This prints once a minute.")
            //     time.sleep(60) # Delay for 1 minute (60 seconds).
//Old code and no secure code
//   void Test()
//   {
//    char buff[50];
//             // char buff[BUFFER_SIZE];
//             // strncpy(buff, "String 1", BUFFER_SIZE - 1);
//             // buff[BUFFER_SIZE - 1] = '\0';
//             // strncat(buff, "String 2", BUFFER_SIZE - strlen(buff) - 1);
//             // strncat(buff, "String 3", BUFFER_SIZE - strlen(buff) - 1);
//           // strlcpy(buf, source, sizeof(buf));
//           // snprintf("Some input: ");
//           printf("Some input: ");
//           // raw_input("Some input: ");
//           // raw_input([prompt]) -> string
//           gets(buff);       //fgets
//           puts(buff);
// }
//                                             // int scan()
//                                               //
//                                               // {
//                                               // 	char buff[22];
//                                               // 	scanf("%$", buff);
//                                                 // }
//
// int main(int argc, char *argv[ ])
// {
//    Test();
//               //snprintf("Welcome back from Main().");
//    printf("Welcome back from Main().");     //snprintf
//                   // system("pause");
//                 // cin.ignore();
//                   //  cin.get();
//    return 0;
// }


              // time.sleep()
              // from time import sleep
              // sleep(0.05)


              // #include <stdio.h>
              // #include <stdlib.h>
              //
              // enum { BUFFER_SIZE = 10 };
              //
              // int main() {
              //     char buffer[BUFFER_SIZE];
              //
              //     int length = snprintf(buffer, BUFFER_SIZE, "%s%s", "long-name", "suffix");
              //
              //     if (length >= BUFFER_SIZE) {
              //         /* handle string truncation! */
              //     }
              //
              //     return EXIT_SUCCESS;
              // }
              //
              //
