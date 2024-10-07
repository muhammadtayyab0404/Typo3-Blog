#
# Table structure for table 'tx_simpleblog_domain_model_blog'
#
CREATE TABLE tx_simpleblog_domain_model_blog (

	title varchar(255) DEFAULT '' NOT NULL,
	description text,
	image int(11) unsigned NOT NULL default '0',

);

#
# Table structure for table 'tx_simpleblog_domain_model_post'
#
CREATE TABLE tx_simpleblog_domain_model_post (

	title varchar(255) DEFAULT '' NOT NULL,
	content text,
	postdate int(11) DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_simpleblog_domain_model_comment'
#
CREATE TABLE tx_simpleblog_domain_model_comment (

	comment text,
	commentdate int(11) DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_simpleblog_domain_model_author'
#
CREATE TABLE tx_simpleblog_domain_model_author (

	fullname varchar(255) DEFAULT '' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_simpleblog_domain_model_tag'
#
CREATE TABLE tx_simpleblog_domain_model_tag (

	tagvalue varchar(255) DEFAULT '' NOT NULL,

);
