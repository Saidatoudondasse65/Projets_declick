/*==============================================================*/
/* Nom de SGBD :  Sybase SQL Anywhere 11                        */
/* Date de création :  02/11/2023 12:22:09                      */
/*==============================================================*/


if exists(select 1 from sys.sysforeignkey where role='FK_COURS_LAISSER_COMMENTA') then
    alter table COURS
       delete foreign key FK_COURS_LAISSER_COMMENTA
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_LIVRES_CONTENIR_PANIER') then
    alter table LIVRES
       delete foreign key FK_LIVRES_CONTENIR_PANIER
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_LIVRES_HERITER_COURS') then
    alter table LIVRES
       delete foreign key FK_LIVRES_HERITER_COURS
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_OUIZ_AVOIR_FORMATIO') then
    alter table OUIZ
       delete foreign key FK_OUIZ_AVOIR_FORMATIO
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_PROFIL_APPARTENI_UTILISAT') then
    alter table PROFIL
       delete foreign key FK_PROFIL_APPARTENI_UTILISAT
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_PROVENIR_PROVENIR_FORMATIO') then
    alter table PROVENIR
       delete foreign key FK_PROVENIR_PROVENIR_FORMATIO
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_PROVENIR_PROVENIR2_COURS') then
    alter table PROVENIR
       delete foreign key FK_PROVENIR_PROVENIR2_COURS
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_UTILISAT_APPARTENI_PROFIL') then
    alter table UTILISATEUR
       delete foreign key FK_UTILISAT_APPARTENI_PROFIL
end if;

if exists(
   select 1 from sys.systable 
   where table_name='COMMENTAIRES'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table COMMENTAIRES
end if;

if exists(
   select 1 from sys.systable 
   where table_name='COURS'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table COURS
end if;

if exists(
   select 1 from sys.systable 
   where table_name='FORMATIONS'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table FORMATIONS
end if;

if exists(
   select 1 from sys.systable 
   where table_name='LIVRES'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table LIVRES
end if;

if exists(
   select 1 from sys.systable 
   where table_name='OUIZ'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table OUIZ
end if;

if exists(
   select 1 from sys.systable 
   where table_name='PANIER'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table PANIER
end if;

if exists(
   select 1 from sys.systable 
   where table_name='PROFIL'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table PROFIL
end if;

if exists(
   select 1 from sys.systable 
   where table_name='PROVENIR'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table PROVENIR
end if;

if exists(
   select 1 from sys.systable 
   where table_name='UTILISATEUR'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table UTILISATEUR
end if;

/*==============================================================*/
/* Table : COMMENTAIRES                                         */
/*==============================================================*/
create table COMMENTAIRES 
(
   IDCOMMENTTAIRE       integer                        not null,
   CONTENU              char(100)                      not null,
   constraint PK_COMMENTAIRES primary key (IDCOMMENTTAIRE)
);

/*==============================================================*/
/* Table : COURS                                                */
/*==============================================================*/
create table COURS 
(
   IDCOUR               integer                        not null,
   IDCOMMENTTAIRE       integer                        null,
   LIBELLE              char(50)                       not null,
   constraint PK_COURS primary key (IDCOUR)
);

/*==============================================================*/
/* Table : FORMATIONS                                           */
/*==============================================================*/
create table FORMATIONS 
(
   IDFORMATION          integer                        not null,
   LIBELLE              char(50)                       not null,
   constraint PK_FORMATIONS primary key (IDFORMATION)
);

/*==============================================================*/
/* Table : LIVRES                                               */
/*==============================================================*/
create table LIVRES 
(
   IDLIVRE              integer                        not null,
   IDPANIER             char(10)                       not null,
   IDCOUR               integer                        not null,
   LIBELLE              char(50)                       not null,
   constraint PK_LIVRES primary key (IDLIVRE)
);

/*==============================================================*/
/* Table : OUIZ                                                 */
/*==============================================================*/
create table OUIZ 
(
   IDQUIZ               char(10)                       not null,
   IDFORMATION          integer                        null,
   CONTENU              char(100)                      not null,
   constraint PK_OUIZ primary key (IDQUIZ)
);

/*==============================================================*/
/* Table : PANIER                                               */
/*==============================================================*/
create table PANIER 
(
   IDPANIER             char(10)                       not null,
   NOMBRE               integer                        not null,
   constraint PK_PANIER primary key (IDPANIER)
);

/*==============================================================*/
/* Table : PROFIL                                               */
/*==============================================================*/
create table PROFIL 
(
   IDPROFIL             char(10)                       not null,
   IDUTILISATEUR        integer                        null,
   NOM                  char(30)                       not null,
   PRENOM               char(30)                       not null,
   IMAGE                char(30)                       not null,
   constraint PK_PROFIL primary key (IDPROFIL)
);

/*==============================================================*/
/* Table : PROVENIR                                             */
/*==============================================================*/
create table PROVENIR 
(
   IDFORMATION          integer                        not null,
   IDCOUR               integer                        not null,
   constraint PK_PROVENIR primary key (IDFORMATION, IDCOUR)
);

/*==============================================================*/
/* Table : UTILISATEUR                                          */
/*==============================================================*/
create table UTILISATEUR 
(
   IDUTILISATEUR        integer                        not null,
   IDPROFIL             char(10)                       not null,
   NOM                  char(30)                       not null,
   PRENOM               char(30)                       not null,
   EMAIL                char(50)                       not null,
   PASSE                char(30)                       null,
   constraint PK_UTILISATEUR primary key (IDUTILISATEUR)
);

alter table COURS
   add constraint FK_COURS_LAISSER_COMMENTA foreign key (IDCOMMENTTAIRE)
      references COMMENTAIRES (IDCOMMENTTAIRE)
      on update restrict
      on delete restrict;

alter table LIVRES
   add constraint FK_LIVRES_CONTENIR_PANIER foreign key (IDPANIER)
      references PANIER (IDPANIER)
      on update restrict
      on delete restrict;

alter table LIVRES
   add constraint FK_LIVRES_HERITER_COURS foreign key (IDCOUR)
      references COURS (IDCOUR)
      on update restrict
      on delete restrict;

alter table OUIZ
   add constraint FK_OUIZ_AVOIR_FORMATIO foreign key (IDFORMATION)
      references FORMATIONS (IDFORMATION)
      on update restrict
      on delete restrict;

alter table PROFIL
   add constraint FK_PROFIL_APPARTENI_UTILISAT foreign key (IDUTILISATEUR)
      references UTILISATEUR (IDUTILISATEUR)
      on update restrict
      on delete restrict;

alter table PROVENIR
   add constraint FK_PROVENIR_PROVENIR_FORMATIO foreign key (IDFORMATION)
      references FORMATIONS (IDFORMATION)
      on update restrict
      on delete restrict;

alter table PROVENIR
   add constraint FK_PROVENIR_PROVENIR2_COURS foreign key (IDCOUR)
      references COURS (IDCOUR)
      on update restrict
      on delete restrict;

alter table UTILISATEUR
   add constraint FK_UTILISAT_APPARTENI_PROFIL foreign key (IDPROFIL)
      references PROFIL (IDPROFIL)
      on update restrict
      on delete restrict;

