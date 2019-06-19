using System.Web.Mvc;

namespace ASPMVC.Controllers
{
    public class MyController : Controller
    {
        // GET
        public ActionResult Index()
        {
            return View();
        }

        public ActionResult Pseudo(string name)
        {
            ViewBag.name = name;
            return View();
        }

        public ActionResult Form()
        {
            return View();
        }

        public ActionResult FormAns(string firstname, string lastname)
        {
            ViewBag.firstname = firstname;
            ViewBag.lastname = lastname;
            return View();
        }
    }
}