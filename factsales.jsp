<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>


<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" 
jdbcUrl="jdbc:mysql://localhost/project_uts?user=root&password=" catalogUri="/WEB-INF/queries/factsales.xml">

select {[Measures].[OrderQty],[Measures].[LineTotal]} ON COLUMNS,
  {([Time].[All Times],[Product].[All Products],[Sales].[All Sales])} ON ROWS
from [penjualan]


</jp:mondrianQuery>





<c:set var="title01" scope="session">Adventure Works Mondrian OLAP Sales</c:set>
