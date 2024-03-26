<x-app-layout>
    <div class="right">
        <div class="recent-updates">
            <h1>Status</h1>
            <div class="updates">
                <h2>You have just Applied </h2>
            </div>
        </div>
        <div class="insights">
            <div class="sales">
                <span class="material-icons-shar">student</span>
                <div class="middle">
                    <div class="left">
                        <h2>Total Students</h2>
                    </div>
                    <div class="progress">
                        <div class="number">
                            <img src="/images/st.png" alt="">

                        </div>
                    </div>
                </div>

            </div>

            <div class="income a">
                <span class="material-icons-shar">Colleges</span>
                <div class="middle">
                    <div class="left">
                        <h2>Total Colleges </h2>
                    </div>
                    <div class="progress">
                        <div class="number">
                            <img src="/images/college.png" alt="">

                        </div>
                    </div>
                </div>

            </div>

            <div class="order a">
                <span class="material-icons-shar">{{ \App\Models\Course::count() }}</span>
                <div class="middle">
                    <div class="left">
                        <h2>Total Courses</h2>
                    </div>
                    <div class="progress">
                        <div class="number">
                            <img src="./images/course.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
            <div class="order a">
                <span class="material-icons-shar">list</span>
                <div class="middle">
                    <div class="left">
                        <h2>updates</h2>
                    </div>
                    <div class="progress">
                        <div class="number">
                            <img src="./images/order.jpg" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
</x-app-layout>