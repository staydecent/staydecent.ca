title: Creating Reusable View Components for Android
---

View components are all the rage in the frontend JavaScript world, with React popularizing their usage. Many [other frameworks](https://docs.angularjs.org/guide/component) have added APIs to support this pattern as well. I've been pretty happy to adopt view components for web developement, so when I started learning Android, I quickly found myself wanting to breakdown my UI into components. 

Android/Java is full-OOP so it really just comes down to extending a built-in ViewGroup class and defining an XML layout.

Here's an example of a stacked date view that could appear as a child of several different parent views. 

## First define the layout

```xml
<?xml version="1.0" encoding="utf-8"?>
<merge xmlns:android="http://schemas.android.com/apk/res/android"
    android:layout_width="wrap_content"
    android:layout_height="wrap_content"
    >

    <TextView
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="Apr"
        android:textAllCaps="true"
        />

    <TextView
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_marginTop="-4dp"
        android:text="24"
        android:textSize="24sp"/>

</merge>
```

Simple enough. 

Note: the `<merge>` tag avoids redundant view groups within your layouts &mdash; check out the [official docs](https://developer.android.com/training/improving-layouts/reusing-layouts.html#Merge) for more information. 

It's not apparent by just looking at the XML, but our component will be contained in a `LinearLayout`, that comes with our Java class.

## Extend a view group

Create a new class that extends one of the built-in view groups. In this case, we'll extend the `LinearLayout`.

```java
// imports have been left out
public class StackedDateView extends LinearLayout {

    private TextView month;
    private TextView day;

    public StackedDateView(Context context, AttributeSet attrs) {
        super(context, attrs);

        setOrientation(LinearLayout.VERTICAL);
        setGravity(Gravity.CENTER_HORIZONTAL);

        LayoutInflater inflater = (LayoutInflater) context
                .getSystemService(Context.LAYOUT_INFLATER_SERVICE);
        inflater.inflate(R.layout.view_stacked_date, this, true);

        month = (TextView) getChildAt(0);
        day = (TextView) getChildAt(1);
    }

    public void setDate(Date date) {
        SimpleDateFormat monthFormat = new SimpleDateFormat("MMM", Locale.US);
        month.setText(monthFormat.format(date));

        SimpleDateFormat dayFormat = new SimpleDateFormat("dd", Locale.US);
        day.setText(dayFormat.format(date));
    }
}
```

It's a super basic view component, but it still saves me from repeating code unnecessarily. All it takes to embed in one of your layouts is:

```xml
<com.yourdomain.app.StackedDateView
            android:id="@+id/stacked_date"
            android:layout_width="wrap_content"
            android:layout_height="wrap_content" />
```

And to populate the TextViews from your Java:

```java
StackedDateView stackedDate = (StackedDateView) root.findViewById(R.id.stacked_date);
stackedDate.setDate(someModel.getPublishedDate());
```

That's it.

