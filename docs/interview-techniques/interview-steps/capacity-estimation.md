# Capacity Estimation

When crafting a system, it becomes crucial to gauge the capacities essential for achieving the system's objectives. This involves taking into account significant metrics such as throughput, bandwidth, and storage.

### Throughput

Throughput represents a vital metric that characterizes the number of requests the system must process to deliver its core value. Typically, throughput is quantified in requests per second, and it's vital to differentiate between read and write requests.

For instance, consider a platform like Netflix, which must manage a substantial influx of read requests because each user client retrieves several megabytes of data per minute to ensure smooth streaming. Conversely, the number of write requests directed to Netflix's servers is relatively low, as only authorized personnel can upload new movies.

### Bandwidth

Bandwidth serves as another critical metric, indicating the amount of data that needs to traverse the network every second. This metric is influenced by both read and write requests, as well as the size of each request.

For instance, a file-sharing or collaboration application is likely to demand more bandwidth compared to a simple messaging app since users must transmit and receive sizable files in real-time. Similarly, a video-conferencing application necessitates higher bandwidth to support clear audio and video communication.

### Storage

Finally, storage is a metric that approximates the storage capacity necessary to sustain the system's primary purpose over a specified time frame, typically around five years.

Consider, for example, a platform like Netflix, which requires a substantial amount of storage space to host and deliver its extensive collection of movies and TV shows. In contrast, a URL shortening service like TinyURL only needs to store a few bytes per link, resulting in significantly lower storage requirements.

By making these capacity estimations, system designers can ensure they are constructing a system capable of managing the anticipated volume of requests, network traffic, and storage demands. With meticulous planning and consideration of these key metrics, designers can create systems that cater to user needs and provide an exceptional user experience.

### In the Interview Context

Capacity estimation is a crucial part of the system design interview, as it helps interviewers understand how you would approach the problem at hand. By asking you to estimate the capacity of a system, interviewers can assess your ability to think critically and make reasonable assumptions.

Also calculation a bunch of numbers without a calculator is very hard to do in a short time. One way to tackle this problem is rounding heavily. For example, if you need to calculate something which is 1 mega byte is size, rather than calculation 1024 kb, you can round it to 1000 kb. Similarly, if you need to calculate something which is 3.2 or 4.6 mega byte in size, you can round it to 3 or 5 mega byte. This will make your calculation much easier and faster.

Another technique is using easy to calculate numbers, rather than using 7 mb per image, use either 5 mb or 10 mb per image. This will make your calculation much easier and faster. Interviewer actually don't care about the exact number, they just want to see how you approach the problem and how you think about the problem. And wasting time on calculation is not a good idea, specially when you have only 20-25 minutes to design a very complex system.