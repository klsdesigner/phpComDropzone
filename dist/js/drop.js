//Formulário A
Dropzone.autoDiscover = false;

var myDropzoneA = new Dropzone("#myDropzoneA", {    
    renameFile: function(file) {
        var dt = new Date();
        var time = dt.getTime();
        var extensao = file.name.split('.').pop();

        return 'anexoA'+time+'.'+extensao;
    },
    acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf",
    addRemoveLinks: true,
    timeout: 50000,
    dictDefaultMessage: "Clique, Arraste ou cole os arquivos para enviar!",

    success: function(file, response) 
    {
        console.log(response);
    },
    error: function(file, response)
    {
        return false;
    }

 });

// Formulário B
Dropzone.autoDiscover = false;

var myDropzoneB = new Dropzone("#myDropzoneB", {    
    renameFile: function(file) {
        var dt = new Date();
        var time = dt.getTime();
        var extensao = file.name.split('.').pop();  

        return 'anexoB'+time+'.'+extensao;
    },
    acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf",
    addRemoveLinks: true,
    timeout: 50000,
    dictDefaultMessage: "Clique, Arraste ou cole os arquivos para enviar!",

    success: function(file, response) 
    {
        console.log(response);
    },
    error: function(file, response)
    {
        return false;
    }

 });  

 // Formulário C
Dropzone.autoDiscover = false;

var myDropzoneC = new Dropzone("#myDropzoneC", {    
    renameFile: function(file) {
        var dt = new Date();
        var time = dt.getTime();
        var extensao = file.name.split('.').pop(); 
                
        return 'anexoC'+time+'.'+extensao;
    },
    acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf",
    addRemoveLinks: true,
    timeout: 50000,
    dictDefaultMessage: "Clique, Arraste ou cole os arquivos para enviar!",

    success: function(file, response) 
    {
        console.log(response);
    },
    error: function(file, response)
    {
        return false;
    }

 });  

 document.onpaste = function(event) {

    var items = (event.clipboardData || event.originalEvent.clipboardData).items;     

    for (index in items) {
        var item = items[index];       

        if (item.kind === 'file') {             
            
            if ( $('.tab-content .active').attr('id') === "one") {                
                // adds the file to your dropzone instance
                console.log('one');
                myDropzoneA.addFile(item.getAsFile());
            }
            
            if( $('.tab-content .active').attr('id') === "two") {                
                // adds the file to your dropzone instance
                console.log('two');
                myDropzoneB.addFile(item.getAsFile());
            }
            
            if( $('.tab-content .active').attr('id') === "three") {                
                // adds the file to your dropzone instance
                console.log('three');
                myDropzoneC.addFile(item.getAsFile());
            }
    
        }
    }

};
