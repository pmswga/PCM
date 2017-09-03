
class UIApp 
{

  constructor(classes) {
    this.classes = classes;
    
    if (this.classes.length > 0 && classes[0] != "") {
      this.current_class = classes[0];
    } else {
      this.current_class = "nil";
    }
    
  }
  
  setClasses(classes) {
    this.classes = classes;
  }
  
  getClasses() {
    return this.classes;
  }
  
  setCurrentClass(current_class) {
    this.current_class = current_class
  }
  
  getClassMembers() {
    
    if (this.current_class != "nil") {
      
      $.ajax({
        url: "php/getVars.php",
        type: "post",
        data: "className=" + this.current_class,
        success: function (replay) {
          $("#vars-table").html(" ");
          $("#vars-table").html(replay);
        }
      });
      
      $.ajax({
        url: "php/getMethods.php",
        type: "post",
        data: "className=" + this.current_class,
        success: function (replay) {
          $("#methods-table").html(" ");
          $("#methods-table").html(replay);
        }
      });
      
      return true;
    } else {
      return false;
    }
    
  }
  
  getMethodSrc(method) {
    
    if (this.current_class != "nil") {
      let className = this.current_class;
      
      $.ajax({
        url: "php/getMethodSrc.php",
        type: "post",
        data: "className=" + className + "&methodName=" + method,
        success: function (replay) {
          
          editAreaLoader.setValue("methodCode", replay);
          
          $("[name='editMethod']").attr("value", method);
          $("[name='editClass']").attr("value", className);
          
          $("#currentEditMethod").text("");
          $("#currentEditMethod").text(method);
          
        }
      });
      
      return true;
    } else {
      return false;
    }
    
  }

}