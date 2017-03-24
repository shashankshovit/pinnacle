/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package shashank;

import java.beans.*;

/**
 *
 * @author Shanky
 */
public class User extends PropertyEditorSupport
{

    String name, username, password, email, address, mobile, sex;
    String qualification[];
    String hobbies;
    int day,month,year;

    //          CONSTRUCTOR

    public User()
    {
    }

    //          GETTER METHODS

    public String getName()
    {
        return name;
    }


    public String getUsername()
    {
        return username;
    }


    public String getPassword()
    {
        return password;
    }


    public String getEmail()
    {
        return email;
    }


    public String getAddress()
    {
        return address;
    }


    public String getMobile()
    {
        return mobile;
    }


    public String getSex()
    {
        return sex;
    }


    public int getDay()
    {
        return day;
    }

    public int getMonth()
    {
        return month;
    }

    public int getYear()
    {
        return year;
    }

    /*
    public String getQualification()
    {
        return name;
    }


    public String getHobbies()
    {
        return name;
    }
    */

    //      SETTER METHODS

    public void setName(String s)
    {
        name= s;
    }

    public void setUsername(String s)
    {
        username= s;
    }

    public void setPassword(String s)
    {
        password= s;
    }

    public void setAddress(String s)
    {
        address= s;
    }

    public void setEmail(String s)
    {
        email= s;
    }

    public void setMobile(String s)
    {
        mobile= s;
    }

    public void setSex(String s)
    {
        sex= s;
    }

    public void setDay(int s)
    {
        day= s;
    }

    public void setMonth(int s)
    {
        month= s;
    }

    public void setYear(int s)
    {
        year= s;
    }

    /*
    public void setQualification(String s)
    {
        = s;
    }

    public void setHobbies(String s)
    {
        = s;
    }
    */



}
