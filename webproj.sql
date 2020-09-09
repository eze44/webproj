-- MySQL dump 10.13  Distrib 5.7.31, for Linux (x86_64)
--
-- Host: localhost    Database: webproj
-- ------------------------------------------------------
-- Server version	5.7.31-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES (1,'endrit','zhuri','ezhuri@gmail.com','098f6bcd4621d373cade4e832627b4f6',1),(2,'test','zhuri','etest@gmail.com','098f6bcd4621d373cade4e832627b4f6',2),(3,'Filan','Fisteku','filan@gmail.com','81dc9bdb52d04dc20036dbd8313ed055',2),(4,'admin filan','fisteku','filanadmin@gmail.com','81dc9bdb52d04dc20036dbd8313ed055',1);
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `content` text,
  `image_path` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `author_id` (`author_id`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Test title','ICA8cD5PbmUgb2YgdGhlIHNwZWNpZmljIG9iamVjdGl2ZXMgb2YgQUxMRUQyIHByb2plY3QgaXMgdG8gZW5oYW5jZSB0aGUgcXVhbGl0eSBvZiBwcmFjdGljYWwgYW5kIGFwcGxpZWQKICAgICAgICAgICAgdGVhY2hpbmcgYW5kIGxlYXJuaW5nIGluIFZvY2F0aW9uYWwgRWR1Y2F0aW9uIGFuZCBUcmFpbmluZyAoVkVUKSBzY2hvb2xzIGFuZCBWb2NhdGlvbmFsIFRyYWluaW5nIENlbnRlcnMKICAgICAgICAgICAgKFZUQ3MpIGluIGNvcmUgb2NjdXBhdGlvbmFsIHNlY3RvcnMgcmVsZXZhbnQgdG8gbWFya2V0IG5lZWRzLCBpbmNsdWRpbmcgY2FyZWVyIGd1aWRhbmNlIGFuZCBjb3Vuc2VsbGluZy4KICAgICAgICAgICAgS29zb3ZvIG5lZWRzIHRvIGNvbnRpbnVlIHRvIHN0cmVuZ3RoZW4gdGhlIHF1YWxpdHkgYW5kIHJlbGV2YW5jZSBvZiBlZHVjYXRpb24gcHJvZ3JhbW1lcyBhbmQgdGhlIGxpbmsKICAgICAgICAgICAgYmV0d2VlbiBlZHVjYXRpb24gYW5kIHRoZSBsYWJvdXIgbWFya2V0IGFzIGEgcHJlY29uZGl0aW9uIGZvciBlbXBsb3lhYmlsaXR5IGFuZCBlY29ub21pYyBkZXZlbG9wbWVudC4KICAgICAgICAgICAgSW5lZmZpY2llbnQgdHJhbnNpdGlvbiBmcm9tIGVkdWNhdGlvbiB0byB3b3JrIGNvbnRyaWJ1dGVzIHRvIHVuZW1wbG95bWVudCBhbmQgbG93IGVjb25vbWljIHBlcmZvcm1hbmNlLiBJbgogICAgICAgICAgICB0aGlzIHJlZ2FyZCwgYWxpZ25pbmcgZWR1Y2F0aW9uIHdpdGggbGFib3VyIG1hcmtldCBuZWVkcyBjYW4gZWZmZWN0aXZlbHkgZW5oYW5jZSBzdHVkZW50c+KAmSBvcHBvcnR1bml0aWVzIG9mCiAgICAgICAgICAgIHRyYW5zaXRpb24gZnJvbSBlZHVjYXRpb24gdG8gZW1wbG95bWVudC4gSW4gdGhpcyByZWdhcmQsIGNvb3BlcmF0aW9uIHdpdGggUHJpdmF0ZSBTZWN0b3IgaW4gdGVybXMgb2YKICAgICAgICAgICAgaW1wbGVtZW50YXRpb24gb2YgYWN0aXZpdGllcyBpcyB2ZXJ5IGltcG9ydGFudCBmb3IgYWNoaWV2aW5nIHN1c3RhaW5hYmxlIHByb2plY3QgcmVzdWx0cy4gVGhlIG1haW4gZm9jdXMKICAgICAgICAgICAgd2lsbCBiZSBvbiBhbGlnbmluZyBlZHVjYXRpb24gYW5kIHRyYWluaW5nIG1hdGVyaWFscyB3aXRoIGxhYm91ciBtYXJrZXQgbmVlZHMsIGltcHJvdmVtZW50IG9mIHRoZSBxdWFsaXR5IG9mCiAgICAgICAgICAgIHRlYWNoaW5nIGFuZCB0aGUgcmVsZXZhbnQgZXF1aXBwaW5nIG9mIFZFVCBzY2hvb2xzIHRvIHN1cHBvcnQgcHJhY3RpY2FsIHRyYWluaW5nLiA8L3A+CgogICAgICAgICAgPHA+QmFzZWQgb24gdGhlIHJlc3VsdHMgb2YgQUxMRUQgSSwgdGhlIHNlY29uZCBwaGFzZSB3aWxsIGNvbnRpbnVlIHRoZSBhY3Rpb24gb2YgYWxpZ25pbmcgZWR1Y2F0aW9uIGFuZAogICAgICAgICAgICB0cmFpbmluZyB3aXRoIGxhYm91ciBtYXJrZXQgbmVlZHMgaW4gS29zb3ZvIHRocm91Z2ggc3VzdGFpbmluZyByZWFjaGVkIHJlc3VsdHMgYW5kIHN1cHBvcnRpbmcgaW5ub3ZhdGl2ZQogICAgICAgICAgICBtZWFzdXJlcyBiYXNlZCBvbiBJUEEgMjAxNyBwbGFucy4gSXQgbGlrZXdpc2UgYWltcyB0byBhZGRyZXNzIFVOIFN1c3RhaW5hYmxlIERldmVsb3BtZW50IEdvYWwgNDEgYW5kIHRoZSBFVQogICAgICAgICAgICBHZW5kZXIgR2FwIElJIG9iamVjdGl2ZXMsIHNwZWNpZmljYWxseSBvYmplY3RpdmUgMTMgcHJvbW90aW5nIGVxdWFsIGFjY2VzcyBmb3IgZ2lybHMgYW5kIHdvbWVuIHRvIGFsbCBsZXZlbHMKICAgICAgICAgICAgb2YgcXVhbGl0eSBlZHVjYXRpb24gYW5kIHZvY2F0aW9uYWwgZWR1Y2F0aW9uIGFuZCB0cmFpbmluZyAoVkVUKSBmcmVlIGZyb20gZGlzY3JpbWluYXRpb24yLiBJbiB0aGlzIHJlZ2FyZCwKICAgICAgICAgICAgQUxMRUQyIHByb2plY3Qgd2lsbCBwYXkgc3BlY2lhbCBhdHRlbnRpb24gYW5kIGluY3JlYXNlIGVmZm9ydHMgb24gZXN0YWJsaXNoaW5nIG11Y2ggY2xvc2VyIGxpbmtzIGJldHdlZW4KICAgICAgICAgICAgZWR1Y2F0aW9uIGFuZCBsYWJvdXIgbWFya2V0IG5lZWRz4oCvaW4gS29zb3ZvLjwvcD4KCiAgICAgICAgICA8cD48c3Ryb25nIGNsYXNzPSJ0ZXh0LXByaW1hcnkiPiBFeHBlY3RlZCBSZXN1bHQgMTo8L3N0cm9uZz4gU3R1ZHkgcHJvZ3JhbW1lcyBzZXJ2ZSBhcyBhIGNvbXBldGVuY2UgaHViIGZvcgogICAgICAgICAgICB0aGUgaW5kdXN0cnkgYW5kIFZFVDogY3VycmljdWxhLCBkaXBsb21hIHN1cHBsZW1lbnQgYW5kIGZhY3VsdHkgbWFuYWdlbWVudCBhcmUgZW5oYW5jZWQsIGxhYm91cgogICAgICAgICAgICBtYXJrZXQtcmVsZXZhbnQgYW5kIGxlYWQgdG8gaW5jcmVhc2VkIGVtcGxveWFiaWxpdHk7IDwvcD4KCiAgICAgICAgICA8cD48c3Ryb25nIGNsYXNzPSJ0ZXh0LXByaW1hcnkiPiBFeHBlY3RlZCBSZXN1bHQgMzo8L3N0cm9uZz4gVm9jYXRpb25hbCBFZHVjYXRpb24gVHJhaW5pbmcgKFZFVCkgc2Nob29scyBhbmQKICAgICAgICAgICAgVm9jYXRpb25hbCBUcmFpbmluZyBDZW50cmVzIChWVENzKSBvZmZlciBxdWFsaXRhdGl2ZSBwcm9ncmFtbWVzIGJhc2VkIG9uIHRoZSBMYWJvdXIgTWFya2V0IE5lZWRzOyBpbmNsdWRpbmcKICAgICAgICAgICAgVHJhaW5pbmcgb2YgVGVhY2hlcnMvVHJhaW5lcnMgKFRvVCksIHN1c3RhaW5hYmxlIHF1YWxpdHkgYXNzdXJhbmNlIG1lY2hhbmlzbXMgYW5kIHByb3Zpc2lvbiBvZiByZWxldmFudAogICAgICAgICAgICBlcXVpcG1lbnQ7PC9wPgoKICAgICAgICAgIDxwPjxzdHJvbmcgY2xhc3M9InRleHQtcHJpbWFyeSI+IEV4cGVjdGVkIFJlc3VsdCA1Ojwvc3Ryb25nPiBUaGUgbGluayBiZXR3ZWVuIHRoZSBWb2NhdGlvbmFsIEVkdWNhdGlvbiBhbmQKICAgICAgICAgICAgVHJhaW5pbmcgKFZFVCkgYW5kIHRoZSBCdXNpbmVzcyBzZWN0b3IgaXMgbW9yZSBzdHJ1Y3R1cmVkOyBjZXJ0YWluIHBsYW5uaW5nIHRvb2xzIGZvciBWRVQgYXJlIHN1c3RhaW5hYmx5IGluCiAgICAgICAgICAgIHBsYWNlOyBhbmQgaW5jZW50aXZlcyBhcmUgaWRlbnRpZmllZCBhbmQgcGlsb3RlZC48L3A+','/images/course-1.jpg','2018-11-01 20:10:15',1),(2,'Test title2','ICA8cD5PbmUgb2YgdGhlIHNwZWNpZmljIG9iamVjdGl2ZXMgb2YgQUxMRUQyIHByb2plY3QgaXMgdG8gZW5oYW5jZSB0aGUgcXVhbGl0eSBvZiBwcmFjdGljYWwgYW5kIGFwcGxpZWQKICAgICAgICAgICAgdGVhY2hpbmcgYW5kIGxlYXJuaW5nIGluIFZvY2F0aW9uYWwgRWR1Y2F0aW9uIGFuZCBUcmFpbmluZyAoVkVUKSBzY2hvb2xzIGFuZCBWb2NhdGlvbmFsIFRyYWluaW5nIENlbnRlcnMKICAgICAgICAgICAgKFZUQ3MpIGluIGNvcmUgb2NjdXBhdGlvbmFsIHNlY3RvcnMgcmVsZXZhbnQgdG8gbWFya2V0IG5lZWRzLCBpbmNsdWRpbmcgY2FyZWVyIGd1aWRhbmNlIGFuZCBjb3Vuc2VsbGluZy4KICAgICAgICAgICAgS29zb3ZvIG5lZWRzIHRvIGNvbnRpbnVlIHRvIHN0cmVuZ3RoZW4gdGhlIHF1YWxpdHkgYW5kIHJlbGV2YW5jZSBvZiBlZHVjYXRpb24gcHJvZ3JhbW1lcyBhbmQgdGhlIGxpbmsKICAgICAgICAgICAgYmV0d2VlbiBlZHVjYXRpb24gYW5kIHRoZSBsYWJvdXIgbWFya2V0IGFzIGEgcHJlY29uZGl0aW9uIGZvciBlbXBsb3lhYmlsaXR5IGFuZCBlY29ub21pYyBkZXZlbG9wbWVudC4KICAgICAgICAgICAgSW5lZmZpY2llbnQgdHJhbnNpdGlvbiBmcm9tIGVkdWNhdGlvbiB0byB3b3JrIGNvbnRyaWJ1dGVzIHRvIHVuZW1wbG95bWVudCBhbmQgbG93IGVjb25vbWljIHBlcmZvcm1hbmNlLiBJbgogICAgICAgICAgICB0aGlzIHJlZ2FyZCwgYWxpZ25pbmcgZWR1Y2F0aW9uIHdpdGggbGFib3VyIG1hcmtldCBuZWVkcyBjYW4gZWZmZWN0aXZlbHkgZW5oYW5jZSBzdHVkZW50c+KAmSBvcHBvcnR1bml0aWVzIG9mCiAgICAgICAgICAgIHRyYW5zaXRpb24gZnJvbSBlZHVjYXRpb24gdG8gZW1wbG95bWVudC4gSW4gdGhpcyByZWdhcmQsIGNvb3BlcmF0aW9uIHdpdGggUHJpdmF0ZSBTZWN0b3IgaW4gdGVybXMgb2YKICAgICAgICAgICAgaW1wbGVtZW50YXRpb24gb2YgYWN0aXZpdGllcyBpcyB2ZXJ5IGltcG9ydGFudCBmb3IgYWNoaWV2aW5nIHN1c3RhaW5hYmxlIHByb2plY3QgcmVzdWx0cy4gVGhlIG1haW4gZm9jdXMKICAgICAgICAgICAgd2lsbCBiZSBvbiBhbGlnbmluZyBlZHVjYXRpb24gYW5kIHRyYWluaW5nIG1hdGVyaWFscyB3aXRoIGxhYm91ciBtYXJrZXQgbmVlZHMsIGltcHJvdmVtZW50IG9mIHRoZSBxdWFsaXR5IG9mCiAgICAgICAgICAgIHRlYWNoaW5nIGFuZCB0aGUgcmVsZXZhbnQgZXF1aXBwaW5nIG9mIFZFVCBzY2hvb2xzIHRvIHN1cHBvcnQgcHJhY3RpY2FsIHRyYWluaW5nLiA8L3A+CgogICAgICAgICAgPHA+QmFzZWQgb24gdGhlIHJlc3VsdHMgb2YgQUxMRUQgSSwgdGhlIHNlY29uZCBwaGFzZSB3aWxsIGNvbnRpbnVlIHRoZSBhY3Rpb24gb2YgYWxpZ25pbmcgZWR1Y2F0aW9uIGFuZAogICAgICAgICAgICB0cmFpbmluZyB3aXRoIGxhYm91ciBtYXJrZXQgbmVlZHMgaW4gS29zb3ZvIHRocm91Z2ggc3VzdGFpbmluZyByZWFjaGVkIHJlc3VsdHMgYW5kIHN1cHBvcnRpbmcgaW5ub3ZhdGl2ZQogICAgICAgICAgICBtZWFzdXJlcyBiYXNlZCBvbiBJUEEgMjAxNyBwbGFucy4gSXQgbGlrZXdpc2UgYWltcyB0byBhZGRyZXNzIFVOIFN1c3RhaW5hYmxlIERldmVsb3BtZW50IEdvYWwgNDEgYW5kIHRoZSBFVQogICAgICAgICAgICBHZW5kZXIgR2FwIElJIG9iamVjdGl2ZXMsIHNwZWNpZmljYWxseSBvYmplY3RpdmUgMTMgcHJvbW90aW5nIGVxdWFsIGFjY2VzcyBmb3IgZ2lybHMgYW5kIHdvbWVuIHRvIGFsbCBsZXZlbHMKICAgICAgICAgICAgb2YgcXVhbGl0eSBlZHVjYXRpb24gYW5kIHZvY2F0aW9uYWwgZWR1Y2F0aW9uIGFuZCB0cmFpbmluZyAoVkVUKSBmcmVlIGZyb20gZGlzY3JpbWluYXRpb24yLiBJbiB0aGlzIHJlZ2FyZCwKICAgICAgICAgICAgQUxMRUQyIHByb2plY3Qgd2lsbCBwYXkgc3BlY2lhbCBhdHRlbnRpb24gYW5kIGluY3JlYXNlIGVmZm9ydHMgb24gZXN0YWJsaXNoaW5nIG11Y2ggY2xvc2VyIGxpbmtzIGJldHdlZW4KICAgICAgICAgICAgZWR1Y2F0aW9uIGFuZCBsYWJvdXIgbWFya2V0IG5lZWRz4oCvaW4gS29zb3ZvLjwvcD4KCiAgICAgICAgICA8cD48c3Ryb25nIGNsYXNzPSJ0ZXh0LXByaW1hcnkiPiBFeHBlY3RlZCBSZXN1bHQgMTo8L3N0cm9uZz4gU3R1ZHkgcHJvZ3JhbW1lcyBzZXJ2ZSBhcyBhIGNvbXBldGVuY2UgaHViIGZvcgogICAgICAgICAgICB0aGUgaW5kdXN0cnkgYW5kIFZFVDogY3VycmljdWxhLCBkaXBsb21hIHN1cHBsZW1lbnQgYW5kIGZhY3VsdHkgbWFuYWdlbWVudCBhcmUgZW5oYW5jZWQsIGxhYm91cgogICAgICAgICAgICBtYXJrZXQtcmVsZXZhbnQgYW5kIGxlYWQgdG8gaW5jcmVhc2VkIGVtcGxveWFiaWxpdHk7IDwvcD4KCiAgICAgICAgICA8cD48c3Ryb25nIGNsYXNzPSJ0ZXh0LXByaW1hcnkiPiBFeHBlY3RlZCBSZXN1bHQgMzo8L3N0cm9uZz4gVm9jYXRpb25hbCBFZHVjYXRpb24gVHJhaW5pbmcgKFZFVCkgc2Nob29scyBhbmQKICAgICAgICAgICAgVm9jYXRpb25hbCBUcmFpbmluZyBDZW50cmVzIChWVENzKSBvZmZlciBxdWFsaXRhdGl2ZSBwcm9ncmFtbWVzIGJhc2VkIG9uIHRoZSBMYWJvdXIgTWFya2V0IE5lZWRzOyBpbmNsdWRpbmcKICAgICAgICAgICAgVHJhaW5pbmcgb2YgVGVhY2hlcnMvVHJhaW5lcnMgKFRvVCksIHN1c3RhaW5hYmxlIHF1YWxpdHkgYXNzdXJhbmNlIG1lY2hhbmlzbXMgYW5kIHByb3Zpc2lvbiBvZiByZWxldmFudAogICAgICAgICAgICBlcXVpcG1lbnQ7PC9wPgoKICAgICAgICAgIDxwPjxzdHJvbmcgY2xhc3M9InRleHQtcHJpbWFyeSI+IEV4cGVjdGVkIFJlc3VsdCA1Ojwvc3Ryb25nPiBUaGUgbGluayBiZXR3ZWVuIHRoZSBWb2NhdGlvbmFsIEVkdWNhdGlvbiBhbmQKICAgICAgICAgICAgVHJhaW5pbmcgKFZFVCkgYW5kIHRoZSBCdXNpbmVzcyBzZWN0b3IgaXMgbW9yZSBzdHJ1Y3R1cmVkOyBjZXJ0YWluIHBsYW5uaW5nIHRvb2xzIGZvciBWRVQgYXJlIHN1c3RhaW5hYmx5IGluCiAgICAgICAgICAgIHBsYWNlOyBhbmQgaW5jZW50aXZlcyBhcmUgaWRlbnRpZmllZCBhbmQgcGlsb3RlZC48L3A+','/images/course-2.jpg','2018-11-01 20:10:15',1),(3,'title3','test3','/images/course-3.jpg','2018-11-01 20:10:15',1),(4,'Test title4','test4','/images/course-4.jpg','2018-11-01 20:10:15',2),(5,'Test title5','test5','/images/course-5.jpg','2018-11-01 20:10:15',2),(6,'tytle','123123','/images/vm-vs-container1.png',NULL,1),(7,'another','123123','/images/vm-vs-container1.png',NULL,1),(8,'tttle','123123','/images/vm-vs-container1.png',NULL,1),(9,'tttle','123123','/images/vm-vs-container1.png',NULL,1),(10,'title','tetetet','/images/vm-vs-container1.png',NULL,1),(11,'title','tetetet','/images/vm-vs-container1.png',NULL,1),(12,'ererre','123123','/images/vm-vs-container1.png',NULL,1),(13,'ttt;e','1233','/images/vm-vs-container1.png',NULL,1),(14,'ttt;e','1233','/images/vm-vs-container1.png',NULL,1),(15,'ttt;e','1233','/images/vm-vs-container1.png',NULL,1),(16,'tttle','123123','/images/vm-vs-container1.png',NULL,1),(17,'213123','123213','/images/vm-vs-container1.png',NULL,1),(18,'test','123123','/images/vm-vs-container1.png',NULL,1),(19,'ttetet','123123','/images/vm-vs-container1.png',NULL,1),(20,'titlll','123123','/images/vm-vs-container1.png',NULL,1),(21,'my title','my content','/images/thread1multi.png','2020-06-30 20:21:11',1),(22,'title','Y250','/images/skip99.png','2020-06-30 20:22:06',1),(23,'the newest one','U29tZSBjb250ZW50IGFyb3VuZCBoZXJlDQo8aDE+R29vZHdvb2QgaGVhZGluZzwvaDE+DQo8cD5UaGlzIGlzIGEgdGVzdCBwYXJhZ3JhcGg8L3A+DQo=','/images/shtepia ne bernice.png','2020-06-30 20:28:58',1),(24,'crayyy','eW95bw==','/images/skip99.png','2020-06-30 20:30:42',1),(25,'The latest 1','U29tZSBjb250ZW50IG90aGVy','/images/Screenshot from 2020-04-15 21-57-12.png','2020-08-11 09:03:28',1),(26,'latest','dGV0ZXRl','/images/sigurt18.png','2020-08-11 09:04:15',1),(27,'prezentimi','c29tZSBjb250ZW50','/images/skip88.png','2020-08-11 16:34:11',1);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(123) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'test@gmail.com','123123'),(2,'y@gmail.com','123123'),(3,'t@gmail.com','123123'),(4,'test@gmail.com','123123'),(5,'et@gmail.com','1234dsfdsf'),(6,'myemail@gmail.com','this is some message'),(7,'test@gmail.com','123123');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-09  8:56:33
