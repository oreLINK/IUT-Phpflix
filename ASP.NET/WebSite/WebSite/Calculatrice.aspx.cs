using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class Calculatrice : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        
    }

    protected void Button_Click(object sender, EventArgs e)
    {
        int v11RUN, v22RUN, ssommeRUN;
        bool isV1RUNNumeric = int.TryParse(v1RUN.Text, out v11RUN);
        bool isV2RUNNumeric = int.TryParse(v2RUN.Text, out v22RUN);
        ssommeRUN = v11RUN + v22RUN;
        Response.Write("Résultat : " + v11RUN + " + " + v22RUN + " = " + ssommeRUN);
    }
}