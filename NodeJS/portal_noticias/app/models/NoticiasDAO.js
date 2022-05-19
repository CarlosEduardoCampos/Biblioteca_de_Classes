function NoticiasDAO(connection)
{
    this._connection = connection;
}

// Devolve um joson com todas as noticias.
NoticiasDAO.prototype.getNoticias = function(callback)
{
    this._connection.query('select * from noticias order by data_criacao desc', callback);
}

// Emcontra uma noticia no banco e devolve json
NoticiasDAO.prototype.getNoticia = function(id, callback)
{    
    this._connection.query('select * from noticias where idNoticias = ?',id, callback);
}

NoticiasDAO.prototype.get5UltimasNoticias = function(callback)
{    
    this._connection.query('select * from noticias order by data_criacao desc limit 5', callback);
}

// Deleta uma noticia no banco
NoticiasDAO.prototype.delNoticia = function(id, callback)
{    
    this._connection.query('delete from noticias where idNoticias = ?', id, callback);
}

// Função para editar uma noticia !!! ERRO !!!
NoticiasDAO.prototype.updNoticia = function(id, noticia, callback)
{ 
    //console.log(noticia);
    this._connection.query('Update noticia set ? where' + id, noticia, callback);
}

// Salva uma noticia no banco
NoticiasDAO.prototype.saveNoticia = function(noticia, callback)
{
    console.log(noticia);
    this._connection.query('Insert into noticias set ?', noticia, callback);
}

module.exports = function()
{
    return NoticiasDAO;
}

/*module.exports = function()
{
    this.getNoticiasDAO = function(callback)
    {
        this._connection.query('select * from noticiasDAO', callback);
    }
    
    this.getNoticia = function(callback)
    {
        this._connection.query('select * from noticiasDAO where idNoticiasDAO = 1', callback);
    }
    
    this.saveNoticia = function(noticia, callback)
    {
        this._connection.query('Insert into noticiasDAO set ?', noticia, callback);
    }
    return this;
}*/