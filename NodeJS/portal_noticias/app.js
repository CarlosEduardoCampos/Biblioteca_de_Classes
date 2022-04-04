let app = require('./config/sever');

require('./app/routes/noticias')(app);
require('./app/routes/form_save_noticia')(app);
require('./app/routes/home')(app);

app.listen(3000,function ()
{
    console.log("Servidor ON");
});