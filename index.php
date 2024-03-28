<html>
  <head> 
    <title>Shira Wein Website</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/d880907dbc.js" crossorigin="anonymous"></script>

    <script>
    $(document).ready(function(){
      $("#publications").load("publications.html");

      const queryString = window.location.search;
      const urlParams = new URLSearchParams(queryString);
      if (urlParams.has('page')) {
        const page = urlParams.get('page');
        $("#content").load(page.concat(".html"));
      }
      else {
        // $("#content").load("publications.html");
      }
    });
    </script>
  </head>
  
<!--   <body style="background-color: rgba(241, 243, 244, 1); background-image: url('pink_background.jpg'); background-repeat: repeat-y; background-size: 1000px 3000px;"> -->
      <body style="background-color: rgba(255, 255, 255, 1); background-image: url('brush_background.jpg'); background-repeat: repeat-y; background-size: 350px 3000px;">
    <div class="row">
      <div class="col-md-4" style="width:350px">
        <h1>Shira Wein</h1> </br>
        <img style="width: 80%" src="small-pic-2.jpg"/>
        </br>
        <h3>Computer Science Ph.D.</h3>
        <h3>Incoming Assistant Professor at Amherst College</h3>
        
        <div class="spacer"> </div>
      </div>
      <div style="width:10px; float:left; overflow:hidden; height:1px;"></div>
            
      <div class="col-md-8">
           
         <h3>
            <i class="fa-solid fa-circle-user"></i> <a href='https://shirawein.github.io'>About Me</a> &#9900; 
            <i class="fa-solid fa-book-open"></i> <a href='https://shirawein.github.io/?page=publications.php'>Publications</a> &#9900; 
            <i class="fa-solid fa-magnifying-glass-chart"></i> <a href='https://shirawein.github.io/?page=research'>Research</a> &#9900; 
            <i class="fa-solid fa-user-graduate"></i> <a href='https://shirawein.github.io/?page=teaching'>Teaching</a> &#9900; 
            <i class="fa-solid fa-file-lines"></i> <a href='https://shirawein.github.io/?page=cv'>CV</a>
          </h3>

         <div id="content">
          <h3>About Me</h3>
          <p style="max-width: 90%; font-size:14px;">
          I recently (February 2024) received my Ph.D. in Computer Science from 
          Georgetown University. In the fall, I will be starting a new position 
          as an Assistant Professor in the Computer Science department of Amherst College!
          </p>
          
          <br/>
          
          <p style="max-width: 90%; font-size:14px;">
          My research is in the area of natural language processing and I am 
          specifically interested in computational semantics (across languages) and 
          model evaluation practices. My research has been supported by a Clare Boothe Luce 
          scholarship and I have previously completed research at Google, the University of 
          Southern California, and the NASA Jet Propulsion Laboratory. 
          In addition to research, I am passionate about teaching and mentorship.
          </p>
          
          <hr style="background-color: black; height: 1px;">
          
          <h3>News</h3>
          <div style="max-width: 90%; height:115px; overflow-y:scroll;">
          <ul>
               <li> (March 2024) I attended EACL in Malta and presented two papers, one on translationese reduction and one on evaluating interpretation data.</li>
               <li> (February 2024) I have received the AAAI/ACM SIGAI New and Future AI Educator Award and am giving a talk at EAAI (co-located with AAAI, in Vancouver, Canada).</li>
               <li> (February 2024) I successfully defended my dissertation and am officially Dr. Shira Wein! </li>
               <li> (January 2024) I have two papers accepted to EACL– one at the main conference and one in Findings. </li>
               <li> (November 2023) I have an article accepted in Computational Linguistics on the cross-lingual utility of Abstract Meaning Representation.</li>
          </ul>
          </div>

          <hr style="background-color: black; height: 1px;">

          <h3>Contact</h3>

            <p style="font-size:16px";>
            <i class="fa-solid fa-envelope"></i> E-mail: sw1158 AT georgetown DOT edu </p> <br/>
              
            <p style="font-size:16px";>Links:</p>
              <ul>
                <li style="font-size:16px";><i class="fa-brands fa-linkedin"></i> <a href="https://www.linkedin.com/in/shirawein/">LinkedIn</a></li>
                <li style="font-size:16px";><i class="fa-brands fa-google-scholar"></i> <a href="https://scholar.google.com/citations?user=z3GD9pEAAAAJ&hl=en&oi=ao"
                       >Google Scholar</a></li>
                <li style="font-size:16px";?><i class="fa-solid fa-book-atlas"></i> <a href="https://aclanthology.org/people/s/shira-wein/">ACL Anthology</a></li>
              </ul>

        <!--   <i class="fa-solid fa-building"></i> <a href="https://www.ias.edu/">Institute for Advanced Study</a>,<br/>
        1 Einstein Drive<br/>
        Princeton, N.J. 08540<br/>
        U.S.A.<br/>
        <br/> -->
          
        </div>
        
      </div>
    </div>

 </body>
</html>
