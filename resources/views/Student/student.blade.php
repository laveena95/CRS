<!--@section('style')
  <style>
        .btn-theme {
        color: #fff;
        background-color: #4ECDC4;
        border-color: #48bcb4;
      }
      .btn-theme:hover,
      .btn-theme:focus,
      .btn-theme:active,
      .btn-theme.active,
      .open .dropdown-toggle.btn-theme {
        color: #fff;
        background-color: #48bcb4;
        border-color: #48bcb4;
      }
      .form-panel {
        background: #ffffff;
        margin: 10px;
        padding: 10px;
        box-shadow: 0px 3px 2px #aab2bd;
        text-align: left;
      }
      label {
        font-weight: 400;
      }

      .form-horizontal.style-form .form-group {
        border-bottom: 1px solid #eff2f7;
        padding-bottom: 15px;
        margin-bottom: 15px;
      }

      .round-form {
        border-radius: 400px;
        -webkit-border-radius: 400px;
      }

      @media (min-width: 768px) {
          .form-horizontal .control-label {
          text-align: left;
        }
      }

      #focusedInput {
        border: 1px solid #ed5565;
        box-shadow: none;
      }

      .add-on {
        float: right;
        margin-top: -37px;
        padding: 3px;
        text-align: center;
      }

      .add-on .btn {
        height: 34px;
      }

  </style>
  <style type="text/css">
    #textEditor{
      margin: 0 auto;
      width: 550px;
      height: 250px;
    }
    #theRibbon{
      border-bottom: none;
      width:550px;
      padding: 10px;
      background-color: #41cac0 ;
      color: white;
      border-radius: 8px 8px 0px 0px;
    }
    #theRibbon button{
      color: white;
      border: none;
      outline: none;
      background-color: transparent;
      cursor: pointer;
    }
    #theRibbon button:hover{
      background-color: rgb(20,90,70);
      transition: all 0.3s linear 0s;
    }
    #richTextArea{
      border: 2px solid silver;
      height: 180px;
      width: 550px;
    }
    #theWYSIWYG{
      height: 100%;
      width: 100%;
    }
    input[type="color"]{
      border: none;
      outline: none;
      background-color: transparent;
    }
  </style>
@endsection

@section('content')

  <section class="wrapper">
      <!-- BASIC FORM ELELEMNTS -->
      <div class="row mt" style="border:2px solid silver;width:800px;margin-left:18%;">
          <div class="col-lg-12">
          <div class="form-panel">
              <hr><h2 class="mb" style="text-align:center;color:;"><i class="fa fa-pencil-square-o"></i> <span> </span> <b>My Resume</b></h2><br><br>
              <form class="form-horizontal style-form" method="get">
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">First Name</label>
                  <div class="col-sm-8">
                      <input type="text"  class="form-control round-form" placeholder="First Name">
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Last Name</label>
                  <div class="col-sm-8">
                      <input type="text"  class="form-control round-form" placeholder="Last Name">
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Profession Title </label>
                  <div class="col-sm-8">
                      <input type="text"  class="form-control round-form" placeholder="Headline(eg: Frontend Developer)">
                  </div>
              </div>
              
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">D.O.B</label>
                  <div class="col-sm-8">
                    <input type="date"  class="form-control round-form" placeholder="Date of Birth">
                </div>  
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Age</label>
                <div class="col-sm-8">
                    <input type="text"  class="form-control round-form" placeholder="Years old">
                </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Address</label>
                  <div class="col-sm-8">
                      <textarea  class="form-control round-form" placeholder="Location"></textarea>
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Semester</label>
                  <div class="col-sm-8">
                      <input type="text"  class="form-control round-form" placeholder="eg(Year lll Semester ll)">
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Registration No</label>
                  <div class="col-sm-8">
                      <input type="text" class="form-control round-form" placeholder="eg 15APC****">
                  </div>
              </div>
              <div class="form-group">
                    <label class="control-label col-md-3">Course Period</label>
                    <div class="col-md-4">
                      <div class="input-group input-large" data-date="01/01/2014" data-date-format="mm/dd/yyyy">
                        <input type="text" class="form-control round-form dpd1" name="from">
                        <span class="input-group-addon">To</span>
                        <input type="text" class="form-control round-form dpd2" name="to">
                      </div>
                      <span class="help-block"></span>
                    </div>
                  </div>
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Mobile No</label>
                  <div class="col-sm-8">
                      <input type="text"  class="form-control round-form"  placeholder="+94(*********)">
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Email</label>
                  <div class="col-sm-8">
                      <input type="email"  class="form-control round-form" placeholder="Your@domain.com">
                  </div>
              </div>
                  <div class="form-group last">
                    <label class="control-label col-md-3">Your Image</label>
                    <div class="col-md-9">
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                          <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                        <div>
                          <span class="btn btn-theme02 btn-file">
                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                          <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                          <input type="file" class="default" />
                          </span>
                          <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Language Skills</label>
                    <div class="col-sm-8">
                        <select multiple class="form-control round-form" style="text-align:center;">
                            <option>JAVA</option>
                            <option>PHP</option>
                            <option>Python</option>
                            <option>HTML</option>
                            <option>CSS</option>
                            <option>JAVASCRIPT</option>
                            <option>JQUERY</option>                              
                            <option>C</option>
                            <option>C++</option>
                            <option>C#</option>
                        </select>
                    </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Frameworks</label>
                  <div class="col-sm-8">
                      <select multiple class="form-control round-form" style="text-align:center;">
                          <option>Bootstrap</option>
                          <option>Laravel</option>
                          <option>Firebase</option>
                          <option>Django</option>
                          <option>Angular</option>
                          <option>Flutter</option>
                      </select>
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tools</label>
                  <div class="col-sm-8">
                      <select multiple class="form-control round-form" style="text-align:center;">
                          <option>Visual Studio Code</option>
                          <option>Netbeans</option>
                          <option>Adobe Photoshop</option>
                      </select>
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Database</label>
                  <div class="col-sm-8">
                      <select multiple class="form-control round-form" style="text-align:center;">
                          <option>My Sql</option>
                          <option>Mongo DB</option>
                          <option>Sqlite</option>
                      </select>
                  </div>  
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Description</label>
                <div id="textEditor" class="col-sm-6">
                  <div id="theRibbon"> 
                    <button id="boldButton" title="Bold"><b>B</b></button>
                    <button id="italicButton" title="Italic"><em>I</em></button>
                    <button id="supButton" title="Superscript">X<sup>2</sup></button>
                    <button id="subButton" title="Subscript">X<sub>2</sub></button>
                    <button id="strikeButton" title="Strikethrough"><s>abc</s></button>
                    <button id="orderedListButton" title="Numbered list">(i)</button>
                    <button id="unorderedListButton" title="Bulleted list">&bull;</button>
                    <input type="color" name="" id="fontColorButton" title="Change Font Color">
                    <input type="color" name="" id="highlightButton" title="Highlight Text">
                    <select id="fontChanger" style="background-color: #41cac0">
                      <option value="Times New Roman">Times New Roman</option>
                      <option value="Consolas">Consolas</option>
                      <option value="Tahoma">Tahoma</option>
                      <option value="monospace">Monospace</option>
                      <option value="cursive">Cursive</option>
                      <option value="sans-serif">Sans-Serif</option>
                      <option value="calibri">Calibri</option>
                    </select>
                    <select id="fontSizeChanger" style="background-color: #41cac0">
                      <script type="text/javascript">
                        for (var i = 1; i <11; i++) {
                            document.write("<option value='"+i+"'>"+i+"</option>");
                          }
                      </script>
                    </select>
                    <button id="linkButton" title="Create Link">Link</button>
                    <button id="unLinkButton" title="Remove Link">Unlink</button>
                    <button id="undoButton" title="Undo">&larr;</button>
                    <button id="redoButton" title="Redo">&rarr;</button>
                  </div>
                  <div id="richTextArea">
                    <iframe src="" id="theWYSIWYG" name="theWYSIWYG" frameborder="0"></iframe>
                  </div>
                </div>
              </div>
              
              <div class="form-send">
                <button type="submit" class="btn btn-large btn-theme" style="margin-left: 60%;">Send To Coordinator</button>
              </div>

                </form>
              </div>
              <!-- /form-panel -->
            </div>
            <!-- /col-lg-12 -->
          </div>
            
              </form>
          </div>
          </div>
          <!-- col-lg-12-->
      </div>
      <!-- /row -->
    
  </section>
    <!-- /wrapper -->

<!--@endsection

@section('script')
  <script type="text/javascript">
      var fonts = document.querySelectorAll("select#fontChanger > option");
      for (var i = 1; i < fonts.length; i++) {
        fonts[i].style.fontFamily = fonts[i].value;
      }
  </script>
  <script type="text/javascript">
      window.addEventListener("load",function(){
        var editor = theWYSIWYG.document;
        editor.designMode = "on";

        boldButton.addEventListener("click",function(){
          editor.execCommand("Bold",false,null);
        },false);

        italicButton.addEventListener("click",function(){
          editor.execCommand("Italic",false,null);
        },false);

        supButton.addEventListener("click",function(){
          editor.execCommand("Superscript",false,null);
        },false);
        subButton.addEventListener("click",function(){
          editor.execCommand("Subscript",false,null);
        },false);
        strikeButton.addEventListener("click",function(){
          editor.execCommand("Strikethrough",false,null);
        },false);
        orderedListButton.addEventListener("click",function(){
          editor.execCommand("InsertOrderedList",false,"newOL" + Math.round(Math.random() * 1000));
        },false);
        unorderedListButton.addEventListener("click",function(){
          editor.execCommand("InsertUnorderedList",false,"newOL" + Math.round(Math.random() * 1000));
        },false);
        fontColorButton.addEventListener("change",function(event){
          editor.execCommand("ForeColor", false, event.target.value);
        },false);
        highlightButton.addEventListener("change",function(event){
          editor.execCommand("BackColor", false, event.target.value);
        },false);
        fontChanger.addEventListener("change",function(event){
          editor.execCommand("FontName", false, event.target.value);
        },false);
        fontSizeChanger.addEventListener("change",function(event){
          editor.execCommand("FontSize", false, event.target.value);
        },false);
        linkButton.addEventListener("click",function(){
          var url = prompt("Enter a URL", "http://");
          editor.execCommand("CreateLink",false);
        },false);
        unLinkButton.addEventListener("click",function(){
          editor.execCommand("UnLink",false,null);
        },false);
        undoButton.addEventListener("click",function(){
          editor.execCommand("undo",false,null);
        },false);
        redoButton.addEventListener("click",function(){
          editor.execCommand("redo",false,null);
        },false);

        },false);
  </script>
@endsection-->