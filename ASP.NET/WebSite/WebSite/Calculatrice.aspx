<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Calculatrice.aspx.cs" Inherits="Calculatrice" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
</head>
<body>
    <%
        int v1GET, v2GET, sommeGET, v1POST, v2POST, sommePOST;%>
    <h3>Calculatrice GET</h3>
    <form method="get">
        <input type="text" name="v1" />
        <label>+</label>
        <input type="text" name="v2" />
        <input type="submit" />
    </form>

    <%
        if (Request.QueryString["v1"] != null && Request.QueryString["v2"] != null)
        {
            
            bool isV1GETNumeric = int.TryParse(Request.QueryString["v1"], out v1GET);
            bool isV2GETNumeric = int.TryParse(Request.QueryString["v2"], out v2GET);
            sommeGET = v1GET + v2GET;
            Response.Write("Résultat : " + v1GET + " + " + v2GET + " = " + sommeGET);
        }
        else
        {
            Response.Write("Données non rentrées.");
        }
    %>

    <h3>Calculatrice POST</h3>
    <form method="post">
        <input type="text" name="v1" />
        <label>+</label>
        <input type="text" name="v2" />
        <input type="submit" />
    </form>

    <%
        if (Request.HttpMethod == "POST")
        {
            bool isV1POSTNumeric = int.TryParse(Request.QueryString["v1"], out v1POST);
            bool isV2POSTNumeric = int.TryParse(Request.QueryString["v2"], out v2POST);
            sommePOST = v1POST + v2POST;
            Response.Write("Résultat : " + v1POST + " + " + v2POST + " = " + sommePOST);
        }
        else
        {
            Response.Write("Données non rentrées.");
        }
    %>

    <h3>Calculatrice RUNAT</h3>
    <form runat="server">
        <asp:TextBox runat="server" FilterType="Numbers" ValidationExpression="\d+" ID="v1RUN" />
        <asp:TextBox runat="server" FilterType="Numbers" ValidationExpression="\d+" ID="v2RUN" />
        <asp:Button runat="server" OnClick="Button_Click" Text="Valider" />
    </form>

</body>
</html>

