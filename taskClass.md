# T\_task Class that extends adb #


A class that specifies the features of the task and it also extends to interface with mysql. It encapsulates mysql php functions. In T\_task, users can add a task, edit a task details, delete a task record, view a task detail and search for a task.


# METHODS #

**addtask()**
Runs a query that adds a new task into the database. The query takes in the task\_name, description, task\_admin, task\_personnel, and due\_date and stores them. If successful, it adds the query and if not successful, it displays an error message.

**edit\_task($task\_id)**
This query takes in a parameter $task\_id from task and calls the data set attached to it. The query takes in the task\_name, description, task\_admin, task\_personnel, and due\_date and stores them. It then updates the current data set according to the stored data and returns the updated data set.

**delete\_task($task\_id)**
Runs a query takes in a parameter $task\_id from task, calls the data attached to the $id and then deletes the record.

**get\_task()**
Returns the data called in the current data set.

**$task\_id**
This is a variable in T\_task class. Each task is uniquely identified by an identification number

**$task\_name**
Each task in the task table is assigned a name.

**$description**
Each task in the task table have a description column where the user is expected to give a brief explanation or summary of the task.

**$task\_personnel**
Every task is operated by a task personnel. This variable takes in the personnel assigned to each task.

**$due\_date**
A due date is appointed by the task administrator and it represents the maximum completion date of a task.