import java.io.FileOutputStream;
import java.io.ObjectOutputStream;

public class CustomerUIClient
{
    public static void serializeToFile(Object obj, String filename)    //, String taskAction
    {
        try
        {
            FileOutputStream file = new FileOutputStream(filename);
            ObjectOutputStream out = new ObjectOutputStream(file);

            System.out.print("Serializing " + obj.toString() + " to " + filename);
            out.writeObject(obj);

            out.close();
            file.close();
        }
        catch (Exception e)
        {
            System.out.println("Exception: " + e.toString());
        }
    }

    public static void main(String[] args)
    {
        Customer cust = new Customer();
        cust.name = "Aung";
        cust.address = "Yangon";

        String file = "Cust.ser";
        serializeToFile(cust, file);
    }
}
