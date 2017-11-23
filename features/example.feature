Feature: Manage library
  In order to manage an online library
  As an explicit system actor
  I want to gain some beneficial outcome which furthers the goal

  Scenario:
    Given the user is an administrator
      And the user is connected
     When he add a book
     Then the book needs to be added
  Scenario:
    Given the user is an administrator
      And the user is connected
     When he modify a book
     Then the book needs to be changed
  Scenario:
    Given the user is an administrator
      And the user is connected
     When he delete a book
     Then the book needs to be deleted
  Scenario:
    Given the user is not administrateur
     When user want consult a book
     Then the book needs to be displayed for the user


  Scenario:
    Given the user is an administrator
      And the user is disconnected / connected
     When he want to connect / disconnect
     Then he need to click on the connect / disconnect button

 Scenario:
    Given the user is an user
      And the user is disconnected / connected
     When he want to connect / disconnect
     Then he need to click on the connect / disconnect button

 Scenario:
    Given the user is an user
      And the user is connected
     When user want consult a book
     Then the book needs to be displayed for the user
