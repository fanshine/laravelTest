<?php
use Zizaco\FactoryMuff\Facade\FactoryMuff;
class DocTest extends TestCase {
    /**
     * Test relationship with User
     */
    public function testRelationshipWithUser()
    {
      // Instantiate(示例) new Doc
      $doc = FactoryMuff::create('Doc');

      $this->assertEquals($doc->user_id, $doc->user->id);
    }

    /**
     * Test that user_id is required
     */
    public function testUserIdIsRequired()
    {
      // Create new Doc
      $doc = new Doc;
      $doc->title = "test title";
      // Set the content
      $doc->content = "Yada yada yada";

      // Doc should not save
      $this->assertFalse($doc->save());

      // Save the errors
      $errors = $doc->errors()->all();

      // There should be 1 error
      $this->assertCount(1, $errors);

      // The error should be set
      $this->assertEquals($errors[0], "The user id field is required.");
    }

    /**
     * Test that Docs' content is required
     */
    public function testDocContentIsRequired()
    {
      // Create new Doc
      $doc = new Doc;
      $doc->title = "test title";
      // Create a User
      $user = FactoryMuff::create('User');

      // Doc should not save
      $this->assertFalse($user->docs()->save($doc));

      // Save the errors
      $errors = $doc->errors()->all();

      // There should be 1 error
      $this->assertCount(1, $errors);

      // The error should be set
      $this->assertEquals($errors[0], "The content field is required.");
    }

    /**
     * Test Doc saves correctly
     */
    public function testDocSavesCorrectly()
    {
      // Create a new Doc
      $doc = FactoryMuff::create('Doc');

      // Save the Doc
      $this->assertTrue($doc->save());
    }
}