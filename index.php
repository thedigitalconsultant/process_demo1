<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <link rel="stylesheet" href="css/main.css" />
        <title> Process Demo1 </title>
        <script type="text/javascript">
            
            var req = new XMLHttpRequest();
            req.onreadystatechange = function(){
                if (this.readyState == 4){
                    if (this.status == 200){
                        //excecute when the request is a success
                    }
                    else if (this.status == 404){
                        //exceute when the the content that are requested is not found
                    }
                }
            }
            
            //req.open('GET','Destination', true/false);
            //req.send();
            
            //req.open('POST','Destination', true/false);
            //req.send('string');
        </script>
    </head>
    
    <body>
      <div class="container">
          <header class="header">
              <div class="logo">
                  <img src="#" alt="#" class="logo-img">
              </div>
              
              <nav class="first-nav">
                  <ul class="first-nav-list">
                      <li class="first-nav-item">
                          <a href="" class="first-nav-link">
                              <i class="fas fa-search"></i>
                              Search
                          </a>
                      </li>
                      <li class="first-nav-item">
                          <a href="" class="first-nav-link">
                              <i class="fas fa-search"></i>
                              Contact Us
                          </a>
                      </li>
                      <li class="first-nav-item">
                          <a href="" class="first-nav-link">
                              <i class="fas fa-search"></i>
                              Sign In
                          </a>
                      </li>
                      <li class="first-nav-item">
                          <a href="" class="first-nav-link">
                              <i class="fas fa-shopping-cart"></i>
                              (0)
                          </a>
                      </li>
                  </ul>
              </nav>
              
              <div class="heading">
                  <h1 class="heading-text">Heading Text</h1>
              </div>
              
              <nav class="second-nav">
                  <ul class="second-nav-list">
                      <li class="second-nav-item">
                          <a href="#" class="second-nav-link">
                              Shop
                          </a>
                      </li>
                      <li class="second-nav-item dropdown-li">
                          <a href="#" class="second-nav-link">
                              Gift Ideas
                          </a>
                          <ul class="dropdown">
                              <li class="dropdown-item">
                                  <a href="#" class="dropdown-link">
                                      Under $25
                                  </a>
                              </li>
                              <li class="dropdown-item">
                                  <a href="#" class="dropdown-link">
                                      Under $50
                                  </a>
                              </li>
                              <li class="dropdown-item">
                                  <a href="#" class="dropdown-link">
                                      Under $100
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="second-nav-item">
                          <a href="#" class="second-nav-link">
                              About Us
                          </a>
                      </li>
                      <li class="second-nav-item">
                          <a href="#" class="second-nav-link">
                              Our Team
                          </a>
                      </li>
                      <li class="second-nav-item">
                          <a href="#" class="second-nav-link">
                              News
                          </a>
                      </li>
                  </ul>
              </nav>
              
          </header>
      </div>
        
        
        
    </body>
</html>