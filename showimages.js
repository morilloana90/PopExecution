$(document).ready(function() {

    // Hook up an event handler for the load button click.
    
    tableau.extensions.initializeAsync().then(function() {

    //  After initialization, ask Tableau what sheets are available
    const worksheets = tableau.extensions.dashboardContent.dashboard.worksheets;

    // Find a specific worksheet 
    var worksheet = worksheets.find(function (sheet) {
      return sheet.name === "HR Performance";
    });

    // Or iterate through the array of worksheets
    worksheets.forEach(function (worksheet) {
      //  process each worksheet...
      console.log(worksheet.name);
    });
    
    
 
      

    let filterChangedHandler = selectionEvent =>{
        worksheet.getUnderlyingDataAsync().then(dataTable =>{
            //let dataTable = marks.data[0];
            let field = dataTable.columns.find(column => column.fieldName === 'Employee Number');
            let list = [];
            for (let row of dataTable.data) {
                list.push(row[field.index].value);
            }
            //console.log(marks)
            //console.log(dataTable)
            //console.log(list)
            $('#imageList').empty()
            for(let emp of list){
              let image = './assets/'+emp+'.png'
              let name = emp
              $('#imageList').append('<li class="list-group-item link-class"><img src="'+image+'" height="200" width="200" class="img-thumbnail" /> '+name+'</span></li>');
            }
    
        });
    };

    let unregisterHandlerFunction = worksheet.addEventListener(tableau.TableauEventType.MarkSelectionChanged, filterChangedHandler);
    //unregisterHandlerFunctions.push(unregisterHandlerFunction);
    
    
  });
});