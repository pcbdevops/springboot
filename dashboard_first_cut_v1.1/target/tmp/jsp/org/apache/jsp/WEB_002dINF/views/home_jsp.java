package org.apache.jsp.WEB_002dINF.views;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;

public final class home_jsp extends org.apache.jasper.runtime.HttpJspBase
    implements org.apache.jasper.runtime.JspSourceDependent {

  private static final JspFactory _jspxFactory = JspFactory.getDefaultFactory();

  private static java.util.List<String> _jspx_dependants;

  private org.glassfish.jsp.api.ResourceInjector _jspx_resourceInjector;

  public java.util.List<String> getDependants() {
    return _jspx_dependants;
  }

  public void _jspService(HttpServletRequest request, HttpServletResponse response)
        throws java.io.IOException, ServletException {

    PageContext pageContext = null;
    HttpSession session = null;
    ServletContext application = null;
    ServletConfig config = null;
    JspWriter out = null;
    Object page = this;
    JspWriter _jspx_out = null;
    PageContext _jspx_page_context = null;

    try {
      response.setContentType("text/html");
      pageContext = _jspxFactory.getPageContext(this, request, response,
      			null, true, 8192, true);
      _jspx_page_context = pageContext;
      application = pageContext.getServletContext();
      config = pageContext.getServletConfig();
      session = pageContext.getSession();
      out = pageContext.getOut();
      _jspx_out = out;
      _jspx_resourceInjector = (org.glassfish.jsp.api.ResourceInjector) application.getAttribute("com.sun.appserv.jsp.resource.injector");

      out.write("\r\n");
      out.write("\r\n");
      out.write("<!DOCTYPE html>\r\n");
      out.write("<html lang=\"en\">\r\n");
      out.write("\r\n");
      out.write("  <body>  <!--\r\n");
      out.write("     <div class=\"row\">     \r\n");
      out.write("        <div class=\"col-md-4\"> \r\n");
      out.write("          <h3> \r\n");
      out.write("              </br>\r\n");
      out.write("          </h3>\r\n");
      out.write("          <ul>\r\n");
      out.write("            <li> Simple Ajax @Controller </li>\r\n");
      out.write("            <li> Mapping Requests </li>\r\n");
      out.write("            <li> Obtaining Request Data </li>\r\n");
      out.write("            <li> Generating Responses </li>\r\n");
      out.write("            <li> Rendering Views </li>\r\n");
      out.write("            <li> Forms </li>\r\n");
      out.write("            <li> File Upload </li>\r\n");
      out.write("            <li> Validation </li>                \r\n");
      out.write("            <li> Exception Handling </li>\r\n");
      out.write("            <li> Message Converters </li>\r\n");
      out.write("            <li> Type Conversion </li>                \r\n");
      out.write("            <li> Layout Decoration (Sitemesh) </li>            \r\n");
      out.write("          <ul>                                \r\n");
      out.write("          </h3>           \r\n");
      out.write("        </div> \r\n");
      out.write("        <div class=\"col-md-8\"> \r\n");
      out.write("          <h3> \r\n");
      out.write("              Next Steps? Read the code.</br>\r\n");
      out.write("          </h3>    \r\n");
      out.write("\r\n");
      out.write("          <ol>\r\n");
      out.write("            <li>Clone: <br/> <code> git clone git://github.com/priyatam/springmvc-bootstrap-showcase.git </code> </li>\r\n");
      out.write("            <li>Build: <br/> <code> $ mvn clean install </code> </li>\r\n");
      out.write("            <li>Run: <br/>  <code> $ mvn jetty:run </code></li>\r\n");
      out.write("            <li>See: <br/>  <code>http://localhost:8080/spring-mvc-showcase/ </code> </li>                                \r\n");
      out.write("          </ol> \r\n");
      out.write("          </h3>                             \r\n");
      out.write("        </div> \r\n");
      out.write("     </div>\r\n");
      out.write("-->\r\n");
      out.write(" </body>\r\n");
      out.write("</html>");
    } catch (Throwable t) {
      if (!(t instanceof SkipPageException)){
        out = _jspx_out;
        if (out != null && out.getBufferSize() != 0)
          out.clearBuffer();
        if (_jspx_page_context != null) _jspx_page_context.handlePageException(t);
        else throw new ServletException(t);
      }
    } finally {
      _jspxFactory.releasePageContext(_jspx_page_context);
    }
  }
}
