import java.io.FileInputStream;
import java.io.ObjectInputStream;

class CustomerDAOServer {

    public static Object deserializeFromFile(String filename) //, String taskAction
    {
        Object obj = new Object();

        try {
            FileInputStream file = new FileInputStream(filename);     //, "sleep 5"
            ObjectInputStream in = new ObjectInputStream(file);

            System.out.println("Deserialization from " + filename);
            obj = in.readObject();

            System.out.println("Deserialized Object : ");
            System.out.println(obj.toString());

            in.close();
            file.close();
        }
        catch (Exception e)
        {
            System.out.println("Exception: " + e.toString());
        }

        return obj;
    }
    public static void main(String[] args) {
        String file = "Cust.ser"    ;
        Customer cust = (Customer)deserializeFromFile(file);
    }
}
