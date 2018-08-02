using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.Script.Serialization;
using System.Net;
using System.IO;
using System.Security.Cryptography;
using System.Text;
using HappinessLib;
using System.Configuration;


namespace HappinessDemo
{
    public partial class PostData : System.Web.UI.Page
    {
        protected string _jsonRequest = "";
        protected string _signature = "";
        protected string _client_id =  System.Configuration.ConfigurationManager.AppSettings["client_id"];
        protected string _PostURL = System.Configuration.ConfigurationManager.AppSettings["PostURL"];
        protected string _Lang = "";
        protected string _timestamp;
        protected string _random = "";
        protected string _nonce = "";




        protected void Page_Load(object sender, EventArgs e)
        {
            SetCostantValues();
            GetBeatValues Getval = new GetBeatValues();
            // For Transactional votes
            if (Request["type"] == "Transaction")
            {
                _emiratesID = Session["emiratesID"].ToString();
                _username = Session["username"].ToString();
                _email = Session["email"].ToString();
                _mobile = Session["mobile"].ToString();
                _TransactionID = Session["transactionID"].ToString();

                Getval = Happiness.GetTransactionalBeats(_ThemeColor,_serviceProvider, _TransactionID, _gessEnabled,
                        _serviceCode, _serviceDescription, _channel, _source, _emiratesID, _username,_email, _mobile, _SecretKey, _lang);
            }
            // For Non Transactional votes
            else
            {
                Getval = Happiness.GetNonTransactionalBeats(_ThemeColor,_serviceProvider, _ApplicationID, _Applicationtype, _platform,
                        _Applicationurl, _version, _source, _emiratesID, _username, _email, _mobile, _SecretKey, _lang);
            }
            _signature = Getval.signature;
            _jsonRequest = Getval.json_payload;
            _random = Getval.random;
            _timestamp = Getval.timestamp;
            _nonce = Getval.nonce;
            _Lang = Getval.lang;
        }


    
        //Non Transaction values setting
            string _serviceProvider, _ApplicationID, _Applicationtype,_platform,_Applicationurl,_version;
        // End Non Transaction value settings

        //Transactional value settings 
            string _TransactionID,_gessEnabled,_serviceCode,_serviceDescription,_channel;
        //End Transactional values settings

        //logged in user values
            string _source,_emiratesID,_username,_email,_mobile,_SecretKey,_lang, _ThemeColor;
      

        private void SetCostantValues()
        {

            _serviceProvider = ConfigurationManager.AppSettings["serviceProvider"].ToString();

            //Non Transaction values setting
            _ApplicationID = ConfigurationManager.AppSettings["applicationID"].ToString();
            _Applicationtype = ConfigurationManager.AppSettings["Applicationtype"].ToString();
            _platform = ConfigurationManager.AppSettings["platform"].ToString();
            _Applicationurl = ConfigurationManager.AppSettings["Applicationurl"].ToString();
            _version = ConfigurationManager.AppSettings["version"].ToString();
            // End Non Transaction value settings

            //Transactional value settings 
            _TransactionID = "233223333"; // provide your real Transaction ID
            _gessEnabled = ConfigurationManager.AppSettings["gessEnabled"].ToString();
            _serviceCode = ConfigurationManager.AppSettings["serviceCode"].ToString();
            _serviceDescription = ConfigurationManager.AppSettings["serviceDescription"].ToString();
            _channel = ConfigurationManager.AppSettings["channel"].ToString();
            //End Transactional values settings

            _source = ConfigurationManager.AppSettings["source"].ToString();
            _emiratesID = "";
            _username = "";
            _email = "";
            _mobile = "";
            _SecretKey = ConfigurationManager.AppSettings["SecretKey"].ToString();
            _lang = Session["Lang"].ToString();
            _ThemeColor = ConfigurationManager.AppSettings["themeColor"].ToString();
        }

    }
    
}
