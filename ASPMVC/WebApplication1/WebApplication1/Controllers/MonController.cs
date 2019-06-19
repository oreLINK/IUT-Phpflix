using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace WebApplication1.Controllers
{
    public class MonController : Controller
    {
        // GET: Mon
        public ActionResult Index()
        {
            return View();
        }
    }
}