create table enzyme(
    id int(8) primary key auto_increment,
    uniqueid varchar(128),
    ecnumber varchar(40),
    sequence varchar(40),
    name varchar(300),
    enzyme varchar(64)
);
#enzyme是对的
create table reaction(
    id int(8) primary key auto_increment,
    uniqueid varchar(128),
    formula varchar(512),
    types varchar(40),
    relevant varchar(8),
    dblinks varchar(512)
);
#reaction加一个dblink


create table reactionenzymatic(
    id int(8) primary key auto_increment,
    reactionid int(8),
    enzymaticreaction varchar(80)#多个
);

create table pathway(
    id int(8) primary key auto_increment,
    speciesid int(8),
    name varchar(128),
    uniqueid varchar(128),
    dblinks varchar(512),
    predecessor varchar(80),
    synonym varchar(120)
);
#pathway是对的
create table reactionlist(
    id int(8) primary key auto_increment,
    pathwayid int(8),
    reaction varchar(128)
);


-- pathway的reactionlist
-- <->  reaction的uniqueid(1对多)
-- reaction的enzymaticreaction(reaction.dat)
-- <->  enzyme的uniqueid(1对多)
-- enzyme的enzyme(enzrxn.dat)
-- <->  gene的product属性(genes.dat)(1对1)
