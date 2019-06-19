<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Hello.aspx.cs" Inherits="Hello" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
</head>
<body>
    <%
        if (Request.QueryString["name"] != null)
        {
            Response.Write("Bonjour " + Request.QueryString["name"]);
        }
        else
        {
            Response.Write("Nul.");
        }%>
</body>
</html>
