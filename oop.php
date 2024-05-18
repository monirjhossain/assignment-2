<?php


class Book {
 // TODO: Add properties as Private
    private $title;
    private $availableCopies; 

 public function __construct($title, $availableCopies) {
     // TODO: Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;
     }


// TODO: Add getTitle method
 public function getTitle() {
        return $this->title;
    }


 // TODO: Add getAvailableCopies method
public function getAvailableCopies() {
        return $this->availableCopies;
    }


 // TODO: Add borrowBook method
 
public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }


 // TODO: Add returnBook method
public function returnBook() {
        $this->availableCopies++;
    }
 
}


// ___________________________________________________

class Member {
 // TODO: Add properties as Private

 private $name;

 public function __construct($name) {
      // TODO: Initialize properties
      $this->name = $name;
     }


 // TODO: Add getName method

    public function getName() {
            return $this->name;
        }
 
 // TODO: Add borrowBook method
    public function borrowBook(Book $book) {
            if ($book->borrowBook()) {
                echo "{$this->name} borrowed {$book->getTitle()}\n";
            } else {
                echo "No available copies of {$book->getTitle()} for {$this->name} to borrow.\n";
            }
        }



 // TODO: Add returnBook method
    public function returnBook(Book $book) {
            $book->returnBook();
            echo "{$this->name} returned {$book->getTitle()}\n";
        }
}


// ____________________________________________

// Create books
$book1 = new Book("The Great Gatsby", 3);
$book2 = new Book("To Kill a Mockingbird", 2);

// Create members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Display available books before borrowing
echo "Available copies of {$book1->getTitle()}: {$book1->getAvailableCopies()}\n";
echo "Available copies of {$book2->getTitle()}: {$book2->getAvailableCopies()}\n";

// Members borrow books
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Display available books after borrowing
echo "Available copies of {$book1->getTitle()}: {$book1->getAvailableCopies()}\n";
echo "Available copies of {$book2->getTitle()}: {$book2->getAvailableCopies()}\n";

// Members return books
$member1->returnBook($book1);
$member2->returnBook($book2);

// Display available books after returning
echo "Available copies of {$book1->getTitle()}: {$book1->getAvailableCopies()}\n";
echo "Available copies of {$book2->getTitle()}: {$book2->getAvailableCopies()}\n";

