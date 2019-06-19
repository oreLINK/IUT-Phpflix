using System;
using System.Collections;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Data.SqlClient;

public partial class Musiciens : System.Web.UI.Page
{
    struct ListElement
    {
        public int id;
        public string nom;
    }
    protected void Page_Load(object sender, EventArgs e)
    {
        /*
        Hashtable tab = new Hashtable();

        string connectionString =
         "Server=info-dormeur;Database=Classique_Web_2017;" +
         "User Id=ETD;Password=ETD";
        var connection = new SqlConnection(connectionString);
        connection.Open();

        string sql = "Select Code_Musicien, Nom_Musicien, Prenom_Musicien " +
    "from Musicien Order by Nom_Musicien";
        SqlCommand command = new SqlCommand(sql, connection);
        SqlDataReader reader = command.ExecuteReader();
        while (reader.Read())
        {
            tab.Add(reader[0], reader[1] + " " + reader[2]);
            //Response.Write(reader[0] + "<br/>");
        }
        Response.Write("<table border=\"1px\">");
        foreach (int info in tab.Keys)
        {
            Response.Write("<tr><td>" + info + "</td><td>" + tab[info].ToString() + "</td>");
            //Response.Write(info + "=" + tab[info].ToString() + "</br>");
        }
        Response.Write(tab + "<br/>");
        reader.Close();
        */
    }

    protected void GridView1_SelectedIndexChanged(object sender, EventArgs e)
    {

    }
}