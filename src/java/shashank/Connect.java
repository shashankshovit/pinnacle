/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package shashank;
import java.sql.*;
/**
 *
 * @author Shanky
 */
public class Connect
{
    static  Connection conection = null;
            Statement state = null;
            ResultSet result = null;
    static
    {
        try
        {
            Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
            String s= "C:\\db\\shashank.mdb";
            conection = DriverManager.getConnection("jdbc:odbc:Driver={Microsoft Access Driver (*.mdb)}; Dbq="+s);
        }
        catch(Exception e)
            {System.out.println(""+e);}
    }

    public Connect()
    {
        try
        {
            state = conection.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE, ResultSet.CONCUR_UPDATABLE);
        }catch(Exception e){System.out.println(""+e);}
    }

    public ResultSet getResultSet(String q)
    {
        try
        {
            result = state.executeQuery(q);
        }catch(Exception e){System.out.println(""+e);}

        return(result);
    }
}
