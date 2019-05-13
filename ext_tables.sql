CREATE TABLE tx_frontenduploader_domain_model_entry (
   uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
   pid int(11) DEFAULT '0' NOT NULL,

   name varchar(255) DEFAULT '' NOT NULL,
   description varchar(255) DEFAULT '' NOT NULL,
   image1 varchar(255) DEFAULT '' NOT NULL,

   PRIMARY KEY (uid),
   KEY parent (pid)
);