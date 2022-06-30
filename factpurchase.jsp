<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>


<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" 
jdbcUrl="jdbc:mysql://localhost/project_uts?user=root&password=" catalogUri="/WEB-INF/queries/factpurchase.xml">

select {[Measures].[Quantity],[Measures].[SubTotal]} ON COLUMNS,
  {([Product].[All Products],[Time].[All Times],[Purchase].[All Purchase])} ON ROWS
from [pembelian]


</jp:mondrianQuery>





<c:set var="title01" scope="session">Adventure Works Mondrian OLAP Purchase</c:set>
