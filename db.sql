create table tUsuarios(
    id int primary key auto_increment,
    nombre varchar(50),
    apellidos varchar(100),
    email varchar(200) unique,
    contrasena varchar(200)
);

create table tPeliculas(
    id int primary key auto_increment,
    nombre varchar(50),
    url_imagen varchar(200),
    director varchar(100),
    puntuacion int
);

create table tComentarios(
    id int primary key auto_increment,
    comentario varchar(200),
    usuario_id int,
    pelicula_id int,
    fecha_comentario DATE,
    foreign key (usuario_id) references tUsuarios(id),
    foreign key (pelicula_id) references tPeliculas(id)
);
-- USUARIOS
insert into tUsuarios values(0,"Adrian","Borrageiros","adrian@adrian.com","1234");
insert into tUsuarios values(0,"Oscar","Perez","oscar@oscar.com","1234");
insert into tUsuarios values(0,"Jose","Medrano","jose@jose.com","1234");
insert into tUsuarios values(0,"Luis","Garrido","luis@luis.com","1234");
insert into tUsuarios values(0,"Carlota","Martinez","carlota@carlota.com","1234");
-- PELICULAS
insert into tPeliculas values(0,"Cadena Perpetua","https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTrBFXcfS56iTRtqQ9WbUB0bRcXz0A96V7NlPE2SaKBwQh6sxZ3","Frank Darabont",8);
insert into tPeliculas values(0,"El Padrino","https://es.web.img3.acsta.net/pictures/18/06/12/12/12/0117051.jpg","Albert S. Ruddy",9);
insert into tPeliculas values(0,"El caballero oscuro", "https://es.web.img3.acsta.net/medias/nmedia/18/86/86/43/20123634.jpg", "Christopher Nolan", 8);
insert into tPeliculas values(0,"La lista de Schindler", "https://es.web.img3.acsta.net/pictures/19/02/12/18/49/4078948.jpg", "Steven Spielberg",8);
insert into tPeliculas values(0,"Pulp Fiction", "https://m.media-amazon.com/images/I/71mlgE7nUdL._AC_SY741_.jpg", "Quentin Tarantino",8);
-- COMENTARIOS
insert into tComentarios values(0,"Historias de dos matones, un boxeador y una pareja de atracadores",1,5,"2022.10.20");
insert into tComentarios values(0,"Siguiendo la estela de Reservoid Dogs, Trantino nos presenta una película violenta como en casi todas sus obras",2,5,"2022.10.20");
insert into tComentarios values(0,"Don Vito Corleone es el respetado y temido jefe de una de las cinco familias de la mafia de Nueva York en los años 40.",3,2,"2022.10.20");
insert into tComentarios values(0,"El hombre tirne cuatro hijos: Connie, Sonny, Fredo y Michael",3,2,"2022.10.20");
insert into tComentarios values(0,"Italiana y Estadounidense",4,2,"2022.10.20");