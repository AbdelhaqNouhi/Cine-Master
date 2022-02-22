create database if not exists cine_master;

use cine_master;

create table if not exists user
(
    time_create TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    id          int auto_increment primary key,
    username    varchar(255) NOT NULL UNIQUE,
    email       varchar(255) NOT NULL UNIQUE,
    password    varchar(255)
);

create table if not exists post
(
    time_create TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    id              int auto_increment primary key,
    title           varchar(255),
    description    varchar(255),
    image           varchar(255),
    categorie       varchar(255)
);

create table if not exists comments
(
    time_create TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    id      int auto_increment primary key,
    user    varchar(255),
    post    varchar(255)
);