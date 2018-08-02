<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="PostData.aspx.cs" Inherits="HappinessDemo.PostData" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head runat="server">
        <title></title>
    </head>
    <body>
           <form action="<%= _PostURL %>" method="post">
                <input type="hidden" name="json_payload" value="<%= _jsonRequest %>" />
                <input type="hidden" name="client_id" value="<%= _client_id %>"/>
                <input type="hidden" name="signature" value="<%= _signature %>"/>
                <input type="hidden" name="lang" value="<%= _Lang %>"/>
                <input type="hidden" name="timestamp" value="<%= _timestamp %>"/>
                <input type="hidden" name="random" value="<%= _random %>"/>
                <input type="hidden" name="nonce" value="<%= _nonce %>"/>
           </form>
    </body>
    <script type="text/javascript">
        document.forms[0].submit();
    </script>
</html>
