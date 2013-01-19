@javascript
Feature: Test blog is up
  Test that my blog is up on the expected domain name

Scenario: Test site root is found

    Given I am on "/"
    Then I should see "shanethehat"
    And I should see "Where I write stuff about programming"

Scenario: Test about page exists

    Given I am on "/"
    And I follow "ABOUT ME"
    Then I should be on "/about-me/"
    And I should see "About Me"
