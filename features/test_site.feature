Feature: Test blog is up
  Test that my blog is up on the expected domain name

@javascript
Scenario: Test site root is found

    Given I am on "/"
    Then I should see "shanethehat"
    And I should see "Where I write stuff about programming"

