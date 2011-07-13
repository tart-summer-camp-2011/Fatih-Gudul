CREATE SCHEMA imdb;

CREATE TABLE imdb."Album" ( 
	id int4 NOT NULL,
	photos text NULL,
CONSTRAINT pk_album PRIMARY KEY ( id )
 );

CREATE TABLE imdb."AwardList" ( 
	"awardID" int4 NOT NULL,
	"awardType" varchar( 40 ) NULL,
CONSTRAINT pk_awardlist PRIMARY KEY ( "awardID" )
 );

CREATE TABLE imdb."Awards" ( 
	"awardID" int4 NULL,
	"movieID" int4 NULL
 );

CREATE INDEX idx_awards ON imdb."Awards" ( "awardID" );

CREATE INDEX idx_awards_0 ON imdb."Awards" ( "movieID" );

CREATE TABLE imdb."Comment" ( 
	id int4 NOT NULL,
	comment text NULL,
	"userID" int4 NULL,
	date varchar( 20 ) NULL,
	"movieID" int4 NULL,
CONSTRAINT pk_comment PRIMARY KEY ( id ),
CONSTRAINT pk_comment_0 UNIQUE ( "userID" )
 );

CREATE INDEX idx_comment ON imdb."Comment" ( "movieID" );

CREATE TABLE imdb."Genre" ( 
	"movieID" int4 NULL,
	"genreID" varchar( 40 ) NULL
 );

CREATE INDEX idx_genre ON imdb."Genre" ( "movieID" );

CREATE INDEX idx_genre_0 ON imdb."Genre" ( "genreID" );

CREATE TABLE imdb."Movie" ( 
	id int4 NOT NULL,
	name text NULL,
	date varchar( 40 ) NULL,
	rating varchar( 5 ) NULL,
	"totalRates" int4 NULL,
	"releaseDate" varchar( 20 ) NULL,
	"movieDetails" text NULL,
	"albumID" int4 NULL,
CONSTRAINT pk_movie PRIMARY KEY ( id ),
CONSTRAINT pk_movie_0 UNIQUE ( "albumID" )
 );

CREATE TABLE imdb."People" ( 
	id int4 NOT NULL,
	"peopleName" varchar( 100 ) NULL,
	dob bool NULL,
	"peopleRole" int4 NULL,
	"aboutPeople" text NULL,
	gender varchar( 1 ) NULL,
	"albumID" int4 NULL,
CONSTRAINT pk_people PRIMARY KEY ( id ),
CONSTRAINT pk_people_0 UNIQUE ( "peopleRole" ),
CONSTRAINT pk_people_1 UNIQUE ( "albumID" )
 );

CREATE TABLE imdb."Roles" ( 
	id int4 NOT NULL,
	role varchar( 100 ) NULL,
	"peopleID" int4 NULL,
	"movieID" int4 NULL,
CONSTRAINT pk_roles PRIMARY KEY ( id ),
CONSTRAINT idx_roles UNIQUE ( "peopleID" )
 );

CREATE INDEX idx_roles_0 ON imdb."Roles" ( "movieID" );

CREATE TABLE imdb."User" ( 
	id int4 NOT NULL,
	name varchar( 100 ) NULL,
	gender varchar( 1 ) NULL,
	"aboutUser" text NULL,
CONSTRAINT pk_user PRIMARY KEY ( id )
 );

CREATE TABLE imdb."genreList" ( 
	"genreID" int4 NULL,
	"genreType" varchar( 40 ) NULL,
CONSTRAINT pk_genrelist UNIQUE ( "genreID" )
 );

CREATE TABLE imdb.photos ( 
	"photoID" int4 NOT NULL,
	"albumID" int4 NULL,
	url varchar( 40 ) NULL,
CONSTRAINT pk_photos PRIMARY KEY ( "photoID" )
 );

CREATE INDEX idx_photos ON imdb.photos ( "albumID" );

ALTER TABLE imdb."Awards" ADD CONSTRAINT fk_awards FOREIGN KEY ( "awardID" ) REFERENCES imdb."AwardList"( "awardID" ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE imdb."Awards" ADD CONSTRAINT fk_awards_0 FOREIGN KEY ( "movieID" ) REFERENCES imdb."Movie"( id ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE imdb."Comment" ADD CONSTRAINT fk_comment FOREIGN KEY ( "movieID" ) REFERENCES imdb."Movie"( id ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE imdb."Comment" ADD CONSTRAINT fk_comment_0 FOREIGN KEY ( "userID" ) REFERENCES imdb."User"( id ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE imdb."Genre" ADD CONSTRAINT fk_genre FOREIGN KEY ( "movieID" ) REFERENCES imdb."Movie"( id ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE imdb."Genre" ADD CONSTRAINT fk_genre_0 FOREIGN KEY ( "genreID" ) REFERENCES imdb."genreList"( "genreID" ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE imdb."Movie" ADD CONSTRAINT fk_movie FOREIGN KEY ( "albumID" ) REFERENCES imdb."Album"( id ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE imdb."People" ADD CONSTRAINT fk_people FOREIGN KEY ( "peopleRole" ) REFERENCES imdb."Roles"( "peopleID" ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE imdb."Roles" ADD CONSTRAINT fk_roles_0 FOREIGN KEY ( "movieID" ) REFERENCES imdb."Movie"( id ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE imdb.photos ADD CONSTRAINT fk_photos FOREIGN KEY ( "albumID" ) REFERENCES imdb."Album"( id ) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE imdb.photos ADD CONSTRAINT fk_photos_0 FOREIGN KEY ( "albumID" ) REFERENCES imdb."People"( "albumID" ) ON DELETE CASCADE ON UPDATE CASCADE;

