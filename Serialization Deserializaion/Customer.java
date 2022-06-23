import java.io.*;
import java.io.Serializable;

class Customer implements Serializable
{
    String name;
    String address;

    private static void readObject(ObjectInputStream in)
    //private void readObject(ObjectInputStream in)
    {
         try
         {
             in.defaultReadObject();
             System.out.println("readObject from Customer class...");
         }
         catch(Exception e)
         {
             System.out.println("Exception: " + e.toString());
         }
     }
}
