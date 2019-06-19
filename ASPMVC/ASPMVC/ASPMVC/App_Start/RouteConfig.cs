using System.Web.Mvc;
using System.Web.Routing;

namespace ASPMVC
{
    public class RouteConfig
    {
        public static void RegisterRoutes(RouteCollection routes)
        {
            routes.IgnoreRoute("{resource}.axd/{*pathInfo}");
            
            routes.MapRoute(
                "Pseudo",
                "hello/{name}",
                new {controller = "My", action = "Pseudo"}
            );

            routes.MapRoute(
                "Form",
                "form",
                new {controller = "My", action = "Form"}
            );
            
            routes.MapRoute(
                "Default",
                "{controller}/{action}/{id}",
                new {controller = "Home", action = "Index", id = UrlParameter.Optional}
            );
        }
    }
}