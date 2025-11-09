// ✅ Load all students from Supabase and display in the table
async function loadStudents() {
  const { data: students, error } = await supabase
    .from('students')
    .select('*');

  if (error) {
    console.error("Error loading data:", error);
    return;
  }

  const tableBody = document.querySelector("#studentTable tbody");
  tableBody.innerHTML = ""; // Clear previous rows

  students.forEach(s => {
    let row = `
      <tr>
        <td>${s.id}</td>
        <td>${s.name}</td>
        <td>${s.email}</td>
        <td>${s.course}</td>
        <td>${s.marks}</td>
        <td>
          <button onclick="openEditForm(${s.id}, '${s.name}', '${s.email}', '${s.course}', ${s.marks})">Edit</button></td>
          <td><button onclick="deleteStudent(${s.id})">Delete</button>
        </td>
      </tr>
    `;
    tableBody.innerHTML += row;
  });
}


// ✅ Add student to Supabase
async function addStudent() {
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const course = document.getElementById("course").value;
  const marks = document.getElementById("marks").value;

  const { error } = await supabase
    .from('students')
    .insert({ name, email, course, marks });

if (error) {
  alert("Error: " + error.message);
  console.error(error);
  return;
}


  closeAddForm();
  loadStudents(); // Reload table
}


// ✅ Delete student by ID
async function deleteStudent(id) {
  const { error } = await supabase
    .from('students')
    .delete()
    .eq('id', id);

  if (error) {
    alert("Error deleting student!");
    console.error(error);
    return;
  }

  loadStudents(); // Refresh table
}

// ✅ Open edit form with current details
function openEditForm(id, name, email, course, marks) {
  document.getElementById("edit_id").value = id;
  document.getElementById("edit_name").value = name;
  document.getElementById("edit_email").value = email;
  document.getElementById("edit_course").value = course;
  document.getElementById("edit_marks").value = marks;
  document.getElementById("editForm").style.display = "flex";
}

// ✅ Close edit form
function closeEditForm() {
  document.getElementById("editForm").style.display = "none";
}

// ✅ Update student details in Supabase
async function updateStudent() {
  const id = document.getElementById("edit_id").value;
  const name = document.getElementById("edit_name").value;
  const email = document.getElementById("edit_email").value;
  const course = document.getElementById("edit_course").value;
  const marks = document.getElementById("edit_marks").value;

  const { error } = await supabase
    .from('students')
    .update({ name, email, course, marks })
    .eq('id', id);

  if (error) {
    alert("Error updating!");
    console.error(error);
    return;
  }

  closeEditForm();
  loadStudents(); // Refresh
}



// ✅ Show & hide form
function openAddForm() {
  document.getElementById("addForm").style.display = "flex";
}
function closeAddForm() {
  document.getElementById("addForm").style.display = "none";
}


// ✅ Load data automatically when page opens
loadStudents();
