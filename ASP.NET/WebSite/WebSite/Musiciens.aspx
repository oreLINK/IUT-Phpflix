<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Musiciens.aspx.cs" Inherits="Musiciens" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
        <div>
        </div>
        <asp:GridView ID="GridView1" runat="server" AutoGenerateColumns="False" DataKeyNames="Code_Musicien" DataSourceID="SqlDataSource1" OnSelectedIndexChanged="GridView1_SelectedIndexChanged">
            <Columns>
                <asp:BoundField DataField="Code_Musicien" HeaderText="Code_Musicien" InsertVisible="False" ReadOnly="True" SortExpression="Code_Musicien" />
                <asp:BoundField DataField="Nom_Musicien" HeaderText="Nom_Musicien" SortExpression="Nom_Musicien" />
                <asp:BoundField DataField="Prenom_Musicien" HeaderText="Prenom_Musicien" SortExpression="Prenom_Musicien" />
                <asp:BoundField DataField="Titre_Oeuvre" HeaderText="Titre_Oeuvre" SortExpression="Titre_Oeuvre" />
            </Columns>
        </asp:GridView>
        <br />
        <br />
        <asp:GridView ID="GridView2" runat="server" AllowPaging="True" AutoGenerateColumns="False" DataKeyNames="Code_Musicien" DataSourceID="SqlDataSource2">
            <Columns>
                <asp:BoundField DataField="Code_Musicien" HeaderText="Code_Musicien" InsertVisible="False" ReadOnly="True" SortExpression="Code_Musicien" />
                <asp:BoundField DataField="Nom_Musicien" HeaderText="Nom_Musicien" SortExpression="Nom_Musicien" />
                <asp:BoundField DataField="Prenom_Musicien" HeaderText="Prenom_Musicien" SortExpression="Prenom_Musicien" />
                <asp:BoundField DataField="Annee_Naissance" HeaderText="Annee_Naissance" SortExpression="Annee_Naissance" />
                <asp:BoundField DataField="Code_Musicien" HeaderText="Code_Musicien" InsertVisible="False" ReadOnly="True" SortExpression="Code_Musicien" />
                <asp:BoundField DataField="Nom_Musicien" HeaderText="Nom_Musicien" SortExpression="Nom_Musicien" />
                <asp:BoundField DataField="Prenom_Musicien" HeaderText="Prenom_Musicien" SortExpression="Prenom_Musicien" />
                <asp:BoundField DataField="Annee_Naissance" HeaderText="Annee_Naissance" SortExpression="Annee_Naissance" />
                <asp:HyperLinkField HeaderText="Oeuvres" NavigateUrl="abc" Text="voir les oeuvres" />
            </Columns>
        </asp:GridView>
        <asp:SqlDataSource ID="SqlDataSource2" runat="server" ConnectionString="<%$ ConnectionStrings:Classique_Web_2017ConnectionString %>" SelectCommand="SELECT [Code_Musicien], [Nom_Musicien], [Prenom_Musicien], [Annee_Naissance] FROM [Musicien]"></asp:SqlDataSource>
        <br />
        <asp:SqlDataSource ID="SqlDataSource1" runat="server" ConnectionString="<%$ ConnectionStrings:Classique_Web_2017ConnectionString %>" SelectCommand="Select Musicien.Code_Musicien, Nom_Musicien, Prenom_Musicien, Titre_Oeuvre
from Musicien inner join Composer on Musicien.Code_Musicien = Composer.Code_Musicien
inner join Oeuvre on Composer.Code_Oeuvre = Oeuvre.Code_Oeuvre
where Musicien.Code_Musicien = @code ">
            <SelectParameters>
                <asp:QueryStringParameter Name="code" QueryStringField="id" />
            </SelectParameters>
        </asp:SqlDataSource>
    </form>
</body>
</html>
