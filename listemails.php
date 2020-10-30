<script type="text/javascript">
        
      var emailList = []
    
      // Client ID and API key from the Developer Console
      var CLIENT_ID = '747961758376-7a3luqn57tlc8o91j0k4npgfh6cp8tdh.apps.googleusercontent.com';
      var API_KEY = 'AIzaSyC3jN1mAibiZKIWs8LH_UlguNmOdAOh7XI';

      // Array of API discovery doc URLs for APIs used by the quickstart
      var DISCOVERY_DOCS = ["https://sheets.googleapis.com/$discovery/rest?version=v4"];

      // Authorization scopes required by the API; multiple scopes can be
      // included, separated by spaces.
      var SCOPES = "https://www.googleapis.com/auth/spreadsheets.readonly";

      /**
       *  On load, called to load the auth2 library and API client library.
       */
      function handleClientLoad() {
        gapi.load('client:auth2', initClient);
      }

      /**
       *  Initializes the API client library and sets up sign-in state
       *  listeners.
       */
      function initClient() {
          console.log("initing client")
        gapi.client.init({
          apiKey: API_KEY,
          clientId: CLIENT_ID,
          discoveryDocs: DISCOVERY_DOCS,
          scope: SCOPES
        }).then(() => {
            console.log("lisitng")
          listEmails();
        })
      }
      
      function listEmails() {
        gapi.client.sheets.spreadsheets.values.get({
          spreadsheetId: '1b4vaHQBC45krk9SSoLLHwqB-iQ4LsVwcL_VPqI5fk7A',
          range: 'Emails!A2:A',
        }).then(function(response) {
          var range = response.result;
          if (range.values.length > 0) {
            for (i = 0; i < range.values.length; i++) {
              var row = range.values[i];
              emailList.push(row[0]);
            }
          }
          console.log(emailList);
        }, function(response) {
        });
      }

    </script>